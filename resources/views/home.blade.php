@extends('layouts.app')

@section('content')
<div class="d-flex 90vh bg-light">
  <nav class="d-flex flex-column bg-white p-3" style="width: 180px; font-weight: 600;">
    <a href="{{ route('roles.index') }}" class="btn btn-primary mb-3 rounded">Roles</a>
    <a href="{{ route('users.index') }}" class="btn btn-success mb-3 rounded">Administradores</a>
    <a href="{{ route('users.index') }}" class="btn btn-danger mb-3 rounded">Usuarios</a>
  </nav>

  <main class="d-flex justify-content-center align-items-center flex-grow-1">
    <div class="row g-3 text-center" style="max-width: 600px;">
      <div class="col-6">
        <div class="btn btn-primary w-100 py-3 fw-semibold rounded">Roles</div>
      </div>
      <div class="col-6">
        <div class="btn btn-success w-100 py-3 fw-semibold rounded">Administradores</div>
      </div>
      <div class="col-6">
        <div class="btn btn-warning w-100 py-3 fw-semibold rounded text-white">Permisos</div>
      </div>
      <div class="col-6">
        <div class="btn btn-danger w-100 py-3 fw-semibold rounded">Usuarios</div>
      </div>
    </div>
  </main>
</div>
@endsection
