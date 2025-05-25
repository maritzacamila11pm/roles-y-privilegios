@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height: 70vh; background-color: #d0e7fb;">
    <div class="bg-white p-4 rounded shadow" style="max-width: 400px; width: 100%;">
        <h2 class="text-center mb-4 fw-bold">LOGIN</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Correo:</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                    class="form-control border border-3 border-dark" />
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña:</label>
                <input id="password" type="password" name="password" required
                    class="form-control border border-3 border-dark" />
            </div>
            <button type="submit" class="btn btn-primary w-100 fw-bold shadow-sm">INICIAR SESIÓN</button>
        </form>
        @if (Route::has('password.request'))
            <div class="text-center mt-3">
                <a href="{{ route('password.request') }}" class="small text-decoration-none">¿Olvidaste tu contraseña?</a>
            </div>
        @endif
    </div>
</div>
@endsection
