@extends('layouts.app')

@section('content')
<style>
    .admin-container { display: flex; height: 100vh; background: #cfe2f3; }
    .sidebar {
        width: 180px; background: #f4f4f4; padding: 15px; font-weight: bold;
    }
    .sidebar a {
        display: block; margin: 10px 0; padding: 8px; background: #ddd;
        text-decoration: none; color: black; border-radius: 4px;
    }
    .main {
        flex: 1; display: flex; justify-content: center; align-items: center;
    }
    .grid {
        display: grid; grid-template-columns: repeat(2, 150px); gap: 20px;
    }
    .btn {
        padding: 15px; color: white; font-weight: bold; text-align: center;
        border-radius: 6px; box-shadow: 2px 2px 0 #000;
    }
    .roles { background: #3b82f6; }
    .admins { background: #22c55e; }
    .permissions { background: #a855f7; }
    .users { background: #ef4444; }
</style>

<div class="admin-container">
    <div class="sidebar">
            <a href="{{ route('roles.index') }}" class="btn roles">Roles</a>
            <a href="{{ route('users.index') }}" class="btn admins">Administradores</a>
            <a href="{{ route('users.index') }}" class="btn users">Usuarios</a>
    </div>
    <div class="main">
        <div class="grid">
            <div class="btn roles">Roles</div>
            <div class="btn admins">Administradores</div>
            <div class="btn permissions">Permisos</div>
            <div class="btn users">Usuarios</div>
        </div>
    </div>
</div>
@endsection
