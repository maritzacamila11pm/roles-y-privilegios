@extends('layouts.app')

@section('content')
<div class="row mb-4">
    <div class="col-lg-12 d-flex justify-content-between align-items-center">
        <h2 class="fw-bold text-primary">
            <i class="fa fa-user me-2"></i>Detalles del Usuario
        </h2>
        <div>
            <a class="btn btn-outline-secondary btn-sm shadow-sm me-2" href="{{ route('users.index') }}">
                <i class="fa fa-arrow-left me-1"></i> Volver
            </a>
            <a class="btn btn-warning btn-sm shadow-sm me-2" href="{{ route('users.edit', $user->id) }}">
                <i class="fa fa-edit me-1"></i> Editar
            </a>
            <a class="btn btn-success btn-sm shadow-sm" href="{{ route('users.exportPdf', $user->id) }}">
                <i class="fa fa-file-pdf me-1"></i> Exportar PDF
            </a>
            <form method="POST" action="{{ route('users.destroy', $user->id) }}" class="btn btn-danger btn-sm shadow-sm">
                @csrf
                @method('DELETE')
                <button type="submit" class="dropdown-item text-white w-100 text-start"
                      onclick="return confirm('¿Desea eliminar el usuario?')"
                      style="border: none; background: none;">
                      <i class="fa fa-trash me-2"></i> Eliminar
                </button>
            </form>

        </div>
    </div>
</div>

<div class="row g-4">
    <!-- Información Personal -->
    <div class="col-lg-6">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">
                    <i class="fa fa-user me-2"></i>Información Personal
                </h5>
            </div>
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="p-3 rounded" style="background-color: #f8f9fa; border-left: 4px solid #007bff;">
                            <strong class="text-primary">Nombre Completo:</strong>
                            <p class="mb-0 fw-semibold text-dark mt-1">{{ $user->name }}</p>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="p-3 rounded" style="background-color: #f8f9fa; border-left: 4px solid #28a745;">
                            <strong class="text-success">Email:</strong>
                            <p class="mb-0 fw-semibold text-dark mt-1">{{ $user->email }}</p>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="p-3 rounded" style="background-color: #f8f9fa; border-left: 4px solid #17a2b8;">
                            <strong class="text-info">DNI:</strong>
                            <p class="mb-0 fw-semibold text-dark mt-1">{{ $user->dni }}</p>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="p-3 rounded" style="background-color: #f8f9fa; border-left: 4px solid #6f42c1;">
                            <strong class="text-purple">Rol del Sistema:</strong><br>
                            @if(!empty($user->getRoleNames()))
                                @foreach($user->getRoleNames() as $role)
                                    @php
                                        $colors = [
                                            'SuperAdmin' => 'danger',
                                            'Admin' => 'success',
                                            'Editor' => 'info',
                                            'User' => 'secondary',
                                            'Practicante' => 'warning',
                                        ];
                                        $colorClass = $colors[$role] ?? 'secondary';
                                    @endphp
                                    <span class="badge bg-{{ $colorClass }} me-1 mt-1">{{ $role }}</span>
                                @endforeach
                            @else
                                <span class="badge bg-secondary mt-1">Sin rol asignado</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Información Académica -->
    <div class="col-lg-6">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">
                    <i class="fa fa-graduation-cap me-2"></i>Información Académica
                </h5>
            </div>
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="p-3 rounded" style="background-color: #f8f9fa; border-left: 4px solid #28a745;">
                            <strong class="text-success">Institución:</strong>
                            <p class="mb-0 fw-semibold text-dark mt-1">{{ $user->institucion ?? 'No especificada' }}</p>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="p-3 rounded" style="background-color: #f8f9fa; border-left: 4px solid #fd7e14;">
                            <strong class="text-warning">Carrera:</strong>
                            <p class="mb-0 fw-semibold text-dark mt-1">{{ $user->carrera ?? 'No especificada' }}</p>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="p-3 rounded" style="background-color: #f8f9fa; border-left: 4px solid #dc3545;">
                            <strong class="text-danger">Modalidad:</strong>
                            <p class="mb-0 fw-semibold text-dark mt-1">{{ $user->modalidad ?? 'No especificada' }}</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="p-3 rounded" style="background-color: #f8f9fa; border-left: 4px solid #dc3545;">
                            <strong class="text-danger">Tipo:</strong>
                            <p class="mb-0 fw-semibold text-dark mt-1">{{ $user->tipo ?? 'No especificada' }}</p>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="p-3 rounded" style="background-color: #f8f9fa; border-left: 4px solid #6610f2;">
                            <strong class="text-purple">Duración de Prácticas:</strong>
                            <p class="mb-0 fw-semibold text-dark mt-1">
                                <span class="badge bg-info fs-6">{{ $user->duracion_meses ?? 'No especificada' }} meses</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Información de Prácticas -->
    <div class="col-lg-8">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0">
                    <i class="fa fa-briefcase me-2"></i>Información de Prácticas
                </h5>
            </div>
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="p-3 rounded" style="background-color: #e3f2fd; border-left: 4px solid #2196f3;">
                            <strong class="text-primary">Oficina Asignada:</strong>
                            <p class="mb-0 fw-semibold text-dark mt-1">
                                {{ $user->oficina->nombre ?? 'Sin oficina asignada' }}
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-3 rounded" style="background-color: #e8f5e8; border-left: 4px solid #4caf50;">
                            <strong class="text-success">Estado:</strong>
                            <p class="mb-0 fw-semibold text-dark mt-1">
                                @if($user->fecha_inicio_practicas && $user->fecha_fin_practicas)
                                    @php
                                        $inicio = \Carbon\Carbon::parse($user->fecha_inicio_practicas);
                                        $fin = \Carbon\Carbon::parse($user->fecha_fin_practicas);
                                        $hoy = \Carbon\Carbon::now();

                                        if ($hoy->lt($inicio)) {
                                            $estado = ['texto' => 'Por Iniciar', 'clase' => 'warning'];
                                        } elseif ($hoy->between($inicio, $fin)) {
                                            $estado = ['texto' => 'En Curso', 'clase' => 'success'];
                                        } else {
                                            $estado = ['texto' => 'Finalizado', 'clase' => 'secondary'];
                                        }
                                    @endphp
                                    <span class="badge bg-{{ $estado['clase'] }} fs-6">{{ $estado['texto'] }}</span>
                                @else
                                    <span class="badge bg-light text-dark fs-6">Sin fechas definidas</span>
                                @endif
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-3 rounded" style="background-color: #fff3e0; border-left: 4px solid #ff9800;">
                            <strong class="text-warning">Fecha de Inicio:</strong>
                            <p class="mb-0 fw-semibold text-dark mt-1">
                                {{ $user->fecha_inicio_practicas ? \Carbon\Carbon::parse($user->fecha_inicio_practicas)->format('d/m/Y') : 'No definida' }}
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-3 rounded" style="background-color: #fce4ec; border-left: 4px solid #e91e63;">
                            <strong class="text-danger">Fecha de Fin:</strong>
                            <p class="mb-0 fw-semibold text-dark mt-1">
                                {{ $user->fecha_fin_practicas ? \Carbon\Carbon::parse($user->fecha_fin_practicas)->format('d/m/Y') : 'No definida' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Información Adicional -->
    <div class="col-lg-4">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-secondary text-white">
                <h5 class="mb-0">
                    <i class="fa fa-info-circle me-2"></i>Información Adicional
                </h5>
            </div>
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="p-3 rounded" style="background-color: #f1f3f4; border-left: 4px solid #6c757d;">
                            <strong class="text-secondary">Fecha de Registro:</strong>
                            <p class="mb-0 fw-semibold text-dark mt-1">
                                {{ $user->created_at ? $user->created_at->format('d/m/Y H:i') : 'No disponible' }}
                            </p>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="p-3 rounded" style="background-color: #f1f3f4; border-left: 4px solid #6c757d;">
                            <strong class="text-secondary">Última Actualización:</strong>
                            <p class="mb-0 fw-semibold text-dark mt-1">
                                {{ $user->updated_at ? $user->updated_at->format('d/m/Y H:i') : 'No disponible' }}
                            </p>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="p-3 rounded" style="background-color: #e8f5e8; border-left: 4px solid #28a745;">
                            <strong class="text-success">ID de Usuario:</strong>
                            <p class="mb-0 fw-semibold text-dark mt-1">
                                <span class="badge bg-light text-dark fs-6">#{{ $user->id }}</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Acciones rápidas -->
                <div class="mt-4 pt-3 border-top">
                    <h6 class="text-secondary mb-3">Acciones Rápidas:</h6>
                    <div class="d-grid gap-2">
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-outline-warning btn-sm">
                            <i class="fa fa-edit me-2"></i>Editar Usuario
                        </a>
                        <a href="{{ route('users.exportPdf', $user->id) }}" class="btn btn-outline-danger btn-sm">
                            <i class="fa fa-file-pdf me-2"></i>Generar PDF
                        </a>
                        <a href="{{ route('usuarios.excel') }}" class="btn btn-outline-success btn-sm">
                            <i class="fa fa-file-excel me-2"></i>Exportar Excel
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .text-purple {
        color: #6f42c1 !important;
    }

    .card {
        transition: transform 0.2s ease-in-out;
    }

    .card:hover {
        transform: translateY(-2px);
    }

    .badge {
        font-size: 0.8rem;
    }
</style>

@endsection
