@extends('layouts.app')

@section('content')
<div class="row mb-3">
    <div class="col-lg-12 d-flex justify-content-between align-items-center">
        <h2 class="text-dark">Editar Usuario</h2>
        <a class="btn btn-primary btn-sm" href="{{ route('users.index') }}">
            <i class="fa fa-arrow-left"></i> Regresar
        </a>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger bg-opacity-25 border border-danger">
        <strong>¡Ops!</strong> Hay algunos problemas con tu entrada.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="card bg-light shadow-sm p-4 rounded border border-0">
    <form method="POST" action="{{ route('users.update', $user->id) }}">
        @csrf
        @method('PUT')
        <div class="row g-3">

            <!-- Información Personal -->
            <div class="col-12">
                <h5 class="text-primary mb-3">📋 Información Personal</h5>
            </div>

            <div class="col-md-4">
                <label class="form-label fw-bold text-secondary">Nombres:</label>
                <input type="text" name="name" class="form-control border-primary"
                       value="{{ old('name', $user->name) }}" required>
            </div>

            <div class="col-md-4">
                <label class="form-label fw-bold text-secondary">Apellido Paterno:</label>
                <input type="text" name="apellido_paterno" class="form-control border-primary"
                       value="{{ old('apellido_paterno', $user->apellido_paterno) }}" required>
            </div>

            <div class="col-md-4">
                <label class="form-label fw-bold text-secondary">Apellido Materno:</label>
                <input type="text" name="apellido_materno" class="form-control border-primary"
                       value="{{ old('apellido_materno', $user->apellido_materno) }}" required>
            </div>

            <div class="col-md-6">
                <label class="form-label fw-bold text-secondary">DNI:</label>
                <input type="text" name="dni" class="form-control border-primary"
                       value="{{ old('dni', $user->dni) }}" required maxlength="8">
            </div>

            <div class="col-md-6">
                <label class="form-label fw-bold text-secondary">Email:</label>
                <input type="email" name="email" class="form-control border-primary"
                       value="{{ old('email', $user->email) }}" required>
            </div>

            <!-- Información Académica -->
            <div class="col-12 mt-4">
                <h5 class="text-primary mb-3">🎓 Información Académica</h5>
            </div>

            <div class="col-md-6">
                <label class="form-label fw-bold text-secondary">Institución:</label>
                <input type="text" name="institucion" class="form-control border-primary"
                       value="{{ old('institucion', $user->institucion) }}" required>
            </div>

            <div class="col-md-6">
                <label class="form-label fw-bold text-secondary">Carrera:</label>
                <input type="text" name="carrera" class="form-control border-primary"
                       value="{{ old('carrera', $user->carrera) }}" required>
            </div>

            <!-- Información de Prácticas -->
            <div class="col-12 mt-4">
                <h5 class="text-primary mb-3">💼 Información de Prácticas</h5>
            </div>
            <div class="col-12">
                <label class="form-label fw-semibold text-primary">Role:</label>
                <select name="roles[]" class="form-select border border-primary rounded-pill" multiple>
                    @foreach ($roles as $value => $label)
                         <option value="{{ $value }}" {{ isset($userRole[$value]) ? 'selected' : ''}}>
                                   {{ $label }}
                         </option>
                     @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label fw-bold text-secondary">Oficina:</label>
                <select name="oficina_id" class="form-select border-primary" required>
                    <option value="">Seleccionar Oficina</option>
                    @foreach ($oficinas as $id => $nombre)
                        <option value="{{ $id }}" {{ old('oficina_id', $user->oficina_id) == $id ? 'selected' : '' }}>{{ $nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-4">
                <label class="form-label fw-bold text-secondary">Modalidad:</label>
                <select name="modalidad" class="form-select border-primary" required>
                    <option value="">Seleccionar Modalidad</option>
                    <option value="AD HONOREM" {{ old('modalidad', $user->modalidad) == 'AD HONOREM' ? 'selected' : '' }}>AD HONOREM</option>
                    <option value="REMUNERADO" {{ old('modalidad', $user->modalidad) == 'REMUNERADO' ? 'selected' : '' }}>REMUNERADO</option>
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label fw-bold text-secondary">Duración (meses):</label>
                <input type="number" name="duracion_meses" class="form-control border-primary"
                       value="{{ old('duracion_meses', $user->duracion_meses) }}" required min="1" max="12">
            </div>

            <div class="col-md-6">
                <label class="form-label fw-bold text-secondary">Fecha Inicio de Prácticas:</label>
                <input type="date" name="fecha_inicio_practicas" class="form-control border-primary"
                       value="{{ old('fecha_inicio_practicas', $user->fecha_inicio_practicas) }}" required>
            </div>

            <div class="col-md-6">
                <label class="form-label fw-bold text-secondary">Fecha Fin de Prácticas:</label>
                <input type="date" name="fecha_fin_practicas" class="form-control border-primary"
                       value="{{ old('fecha_fin_practicas', $user->fecha_fin_practicas) }}" required>
            </div>

            <!-- Botón -->
            <div class="col-12 text-center mt-4">
                <button type="submit" class="btn btn-primary btn-lg px-5">
                    <i class="fa-solid fa-floppy-disk me-2"></i> Actualizar Usuario
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
