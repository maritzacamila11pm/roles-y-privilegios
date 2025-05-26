@extends('layouts.app')

@section('content')
<main class="main" id="top">
  <div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center bg-light">
    <div class="card shadow-lg border-0 rounded-4 overflow-hidden" style="max-width: 900px;">
      <div class="row g-0">

        <!-- Lado izquierdo con imagen -->
        <div class="col-md-5 bg-primary d-flex flex-column justify-content-center align-items-center text-white p-4">
          <h2 class="fw-bold mb-3">¡Bienvenida!</h2>
          <p class="text-center">Crea una cuenta para acceder a todas las funciones del sistema.</p>
          <img src="https://cdn-icons-png.flaticon.com/512/295/295128.png" class="img-fluid mt-3" alt="Registro" width="150">
        </div>

        <!-- Lado derecho con formulario -->
        <div class="col-md-7 bg-white p-5">
          <h3 class="mb-4 text-center text-primary fw-bold">Crear cuenta</h3>
          <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-3">
              <label class="form-label">Nombre completo</label>
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autofocus>
              @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <label class="form-label">Correo electrónico</label>
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
              @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <label class="form-label">Contraseña</label>
              <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
              @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-4">
              <label class="form-label">Confirmar contraseña</label>
              <input type="password" name="password_confirmation" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary w-100 py-2">Registrarse</button>

            <div class="text-center mt-3">
              <small>¿Ya tienes una cuenta? <a href="{{ route('login') }}">Inicia sesión</a></small>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
