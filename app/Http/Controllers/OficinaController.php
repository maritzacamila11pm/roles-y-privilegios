<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Models\Oficina;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class OficinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $oficinas = Oficina::latest()->paginate(10);

        return view('oficinas.index', compact('oficinas'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('oficinas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'nombre' => 'required|string|max:255',
            'codigo' => 'nullable|string|max:10',
            'gerencia' => 'nullable|string|max:255',
            'sub_gerencia' => 'nullable|string|max:255',
            'descripcion' => 'nullable|text'
        ]);

        Oficina::create($request->all());

        return redirect()->route('oficinas.index')
                         ->with('success', 'Oficina creada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $oficina = Oficina::with('usuarios')->findOrFail($id);
        return view('oficinas.show', compact('oficina'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $oficina = Oficina::findOrFail($id);
        return view('oficinas.edit', compact('oficina'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'nombre' => 'required|string|max:255',
            'codigo' => 'nullable|string|max:10',
            'gerencia' => 'nullable|string|max:255',
            'sub_gerencia' => 'nullable|string|max:255',
            'descripcion' => 'nullable|text'
        ]);

        $oficina = Oficina::findOrFail($id);
        $oficina->update($request->all());

        return redirect()->route('oficinas.index')
                         ->with('success', 'Oficina actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        Oficina::findOrFail($id)->delete();

        return redirect()->route('oficinas.index')
                         ->with('success', 'Oficina eliminada exitosamente');
    }

    public function exportPDF()
    {
        $oficinas = Oficina::all();
        $pdf = Pdf::loadView('oficinas.pdf', compact('oficinas'));
        return $pdf->download('oficinas.pdf');
    }

}
