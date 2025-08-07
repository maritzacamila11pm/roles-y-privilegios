<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Oficina;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $data = User::with('oficina')->latest()->paginate(10);

        return view('users.index', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $roles = Role::pluck('name', 'name')->all();
        $oficinas = Oficina::pluck('nombre', 'id')->all();

        return view('users.create', compact('roles', 'oficinas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'dni' => 'required|unique:users,dni',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'institucion' => 'required',
            'carrera' => 'required',
            'fecha_inicio_practicas' => 'required|date',
            'fecha_fin_practicas' => 'required|date|after:fecha_inicio_practicas',
            'modalidad' => 'required',
            'duracion_meses' => 'required|numeric',
            'oficina_id' => 'required|exists:oficinas,id',
            'roles' => 'required'
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')
                         ->with('success', 'Usuario creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $user = User::with('oficina', 'roles')->find($id);
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $user = User::find($id);
        $roles = Role::pluck('name', 'name')->all();
        $oficinas = Oficina::pluck('nombre', 'id')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();

        return view('users.edit', compact('user', 'roles', 'oficinas', 'userRole'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'dni' => 'required|unique:users,dni,'.$id,
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'institucion' => 'required',
            'carrera' => 'required',
            'fecha_inicio_practicas' => 'required|date',
            'fecha_fin_practicas' => 'required|date|after:fecha_inicio_practicas',
            'modalidad' => 'required',
            'duracion_meses' => 'required|numeric',
            'oficina_id' => 'required|exists:oficinas,id',
            'roles' => 'required'
        ]);

        $input = $request->all();
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = Arr::except($input, ['password']);
        }

        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id', $id)->delete();

        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')
                         ->with('success', 'Usuario actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
                         ->with('success', 'Usuario eliminado exitosamente');
    }

    /**
     * Exportar PDF individual del usuario
     */
    public function exportPdf($id)
    {
        $usuario = User::with('oficina')->findOrFail($id);
        $pdf = Pdf::loadView('users.pdf', compact('usuario')); // ← aquí era el error
        return $pdf->stream('usuario_' . $usuario->dni . '.pdf');
    }

    /**
     * Exportar Excel de todos los usuarios
     */
    public function exportExcel()
    {
        $usuarios = User::with('oficina')->get();

        $filename = "usuarios_" . date('Y-m-d') . ".xls";
        header("Content-Type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=\"$filename\"");

        $mostrar_columnas = false;
        $salida = fopen("php://output", "w");

        foreach ($usuarios as $usuario) {
            $data = [
                'ID' => $usuario->id,
                'Nombres' => $usuario->name,
                'Apellido Paterno' => $usuario->apellido_paterno,
                'Apellido Materno' => $usuario->apellido_materno,
                'DNI' => $usuario->dni,
                'Email' => $usuario->email,
                'Institución' => $usuario->institucion,
                'Carrera' => $usuario->carrera,
                'Oficina' => $usuario->oficina->nombre ?? 'Sin asignar',
                'Modalidad' => $usuario->modalidad,
                'Fecha Inicio' => $usuario->fecha_inicio_practicas,
                'Fecha Fin' => $usuario->fecha_fin_practicas,
                'Duración (meses)' => $usuario->duracion_meses
            ];

            if (!$mostrar_columnas) {
                fputcsv($salida, array_keys($data), "\t");
                $mostrar_columnas = true;
            }
            fputcsv($salida, $data, "\t");
        }

        fclose($salida);
        exit;
    }
}
