<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Bienvenido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">

    <div class="bg-white p-5 rounded shadow text-center" style="max-width: 400px;">
        <h1 class="mb-3">Bienvenido</h1>
        <h2 class="mb-4">Sistema de roles y Privilegios</h2>

        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}" class="btn btn-primary mx-2 mb-2">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-primary mx-2 mb-2">Login</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-secondary mx-2 mb-2">Register</a>
                @endif
            @endauth
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
