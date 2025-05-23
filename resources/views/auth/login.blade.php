@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #add8e6; /* azul claro */
    }
    .login-box {
        background-color: white;
        padding: 30px;
        margin: 80px auto;
        width: 400px;
        border-radius: 5px;
        box-shadow: 0 0 10px #999;
        text-align: center;
    }
    .login-box h2 {
        font-size: 40px;
        margin-bottom: 20px;
        font-weight: bold;
    }
    .login-box input[type="email"],
    .login-box input[type="password"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 3px solid black;
        font-size: 16px;
    }
    .login-box button {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: white;
        font-weight: bold;
        border: none;
        font-size: 16px;
        margin-top: 10px;
        box-shadow: 2px 2px 0px #000;
    }
    .login-box a {
        display: block;
        margin-top: 10px;
        font-size: 14px;
    }
</style>

<div class="login-box">
    <h2>LOGIN</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label for="email">Correo:</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
        </div>
        <div>
            <label for="password">Contraseña:</label>
            <input id="password" type="password" name="password" required>
        </div>
        <button type="submit">INICIAR SESION</button>
        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
        @endif
    </form>
</div>
@endsection
