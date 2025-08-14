@extends('layouts.app')

@section('content')
<div class="row mb-4">
    <div class="col-lg-12 d-flex justify-content-between align-items-center">
        <h2 class="text-primary fw-bold"> USUARIOS </h2>
        <a class="btn btn-primary mb-2 rounded-pill shadow-sm" href="{{ route('users.create') }}">
            <i class="fa fa-plus me-1"></i> Create New User
        </a>
    </div>
</div>

@session('success')
    <div class="alert alert-success alert-dismissible fade show rounded-3 shadow-sm" role="alert">
        {{ $value }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endsession

<style>
    /* Fijamos un ancho de columnas para evitar desbordamiento en la pagina */
    .table-fixed {
        table-layout: fixed;
        width: 100%;
    }

    .col-no { width: 50px; }
    .col-rol { width: 80px; }
    .col-name { width: 120px; }
    .col-dni { width: 90px; }
    .col-oficina { width: 100px; }
    .col-institucion { width: 80px; }
    .col-carrera { width: 100px; }
    .col-fecha { width: 80px; }
    .col-modalidad { width: 100px; }
    .col-duracion { width: 70px; }
    .col-actions { width: 120px; }

    /* Truncar texto con puntos suspensivos */
    .truncate {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        cursor: help;
    }

    /* Tooltip mejorado */
    .tooltip-inner {
        max-width: 300px;
        text-align: left;
        word-wrap: break-word;
    }

    /* Badges compactos */
    .badge-sm {
        font-size: 0.78rem;
        padding: 0.25em 0.5em;
    }

    /* Responsive: ocultar columnas menos importantes en móviles */
    @media (max-width: 992px) {
        .hide-lg { display: none !important; }
    }

    @media (max-width: 768px) {
        .hide-md { display: none !important; }
        .table-fixed { font-size: 0.8rem; }
    }
</style>

<div class="table-responsive shadow-sm rounded-4 overflow-hidden">
    <table class="table table-bordered table-hover align-middle mb-0 bg-white table-fixed">
        <thead class="table-primary">
            <tr>
                <th class="text-center col-no">No</th>
                <th class="col-rol hide-md">Rol</th>
                <th class="col-name">Nombre</th>
                <th class="col-dni">DNI</th>
                <th class="col-oficina hide-lg">Oficina</th>
                <th class="col-institucion hide-md">Institución</th>
                <th class="col-carrera hide-lg">Carrera</th>
                <th class="col-fecha">F. Inicio</th>
                <th class="col-fecha hide-md">F. Fin</th>
                <th class="col-modalidad hide-lg">Modalidad</th>
                <th class="col-duracion">Duración</th>
                <th class="text-center col-actions">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($data as $key => $user)
            <tr>
                <td class="text-center">{{ ++$i }}</td>
                <td class="hide-md">
                    <span class="badge bg-secondary badge-sm">
                        {{ substr($user->role, 0, 5) }}
                    </span>
                </td>
                <td class="truncate"
                    data-bs-toggle="tooltip"
                    title="{{ $user->name }}">
                    {{ $user->name }}
                </td>
                <td>{{ $user->dni }}</td>
                <td class="truncate hide-lg"
                    data-bs-toggle="tooltip"
                    title="{{ $user->oficina->nombre ?? 'No asignada' }}">
                    {{ $user->oficina->nombre ?? 'N/A' }}
                </td>
                <td class="truncate hide-md"
                    data-bs-toggle="tooltip"
                    title="{{ $user->institucion }}">
                    {{ $user->institucion }}
                </td>
                <td class="truncate hide-lg"
                    data-bs-toggle="tooltip"
                    title="{{ $user->carrera }}">
                    {{ $user->carrera }}
                </td>
                <td class="text-center">
                    <small>{{ \Carbon\Carbon::parse($user->fecha_inicio_practicas)->format('d/m') }}</small>
                </td>
                <td class="text-center hide-md">
                    <small>{{ \Carbon\Carbon::parse($user->fecha_fin_practicas)->format('d/m') }}</small>
                </td>
                <td class="truncate hide-lg"
                    data-bs-toggle="tooltip"
                    title="{{ $user->modalidad }}">
                    {{ substr($user->modalidad, 0, 8) }}
                </td>
                <td class="text-center">
                    <span class="badge bg-info badge-sm">{{ $user->duracion_meses }}m</span>
                </td>
                <td class="text-center position-relative">
                    <div class="dropdown">
                        <button class="btn btn-outline-primary btn-sm dropdown-toggle"
                                type="button"
                                id="dropdownMenuButton{{ $user->id }}"
                                data-bs-toggle="dropdown"
                                data-bs-auto-close="true"
                                aria-expanded="false">
                            <i class="fa fa-cog"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end shadow"
                            aria-labelledby="dropdownMenuButton{{ $user->id }}"
                            style="z-index: 1050;">
                            <li>
                                <a class="dropdown-item" href="{{ route('users.show',$user->id) }}">
                                    <i class="fa fa-eye me-2"></i> Ver
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('users.edit',$user->id) }}">
                                    <i class="fa fa-edit me-2"></i> Editar
                                </a>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('users.exportPdf', $user->id) }}">
                                    <i class="fa fa-file-pdf me-2 text-danger"></i> PDF
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('usuarios.excel') }}">
                                    <i class="fa fa-file-excel me-2 text-success"></i> Excel
                                </a>
                            </li>
                             <li>
                                <a class="dropdown-item" href="">
                                    <i class="fa fa-file-excel me-2 text-success"></i> Asistencia
                                </a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form method="POST" action="{{ route('users.destroy', $user->id) }}" class="m-0">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="dropdown-item text-danger w-100 text-start"
                                            onclick="return confirm('¿Eliminar usuario?')"
                                            style="border: none; background: none;">
                                        <i class="fa fa-trash me-2"></i> Eliminar
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<!-- Tarjetas para móviles (alternativa) -->
<div class="d-md-none mt-3">
    <div class="row">
        @foreach ($data as $user)
        <div class="col-12 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <h6 class="card-title mb-0">{{ $user->name }}</h6>
                        <span class="badge bg-secondary">{{ $user->role }}</span>
                    </div>
                    <p class="card-text small mb-1">
                        <strong>DNI:</strong> {{ $user->dni }}<br>
                        <strong>Oficina:</strong> {{ $user->oficina->nombre ?? 'N/A' }}<br>
                        <strong>Duración:</strong> {{ $user->duracion_meses }} meses
                    </p>
                    <div class="btn-group w-100" role="group">
                        <a href="{{ route('users.show',$user->id) }}" class="btn btn-outline-primary btn-sm">Ver</a>
                        <a href="{{ route('users.edit',$user->id) }}" class="btn btn-outline-warning btn-sm">Editar</a>
                        <a href="{{ route('users.exportPdf', $user->id) }}" class="btn btn-outline-danger btn-sm">PDF</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="mt-3">
    {!! $data->links('pagination::bootstrap-5') !!}
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Inicializar tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
});
</script>

@endsection
