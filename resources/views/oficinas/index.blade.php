@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">📋 Lista de Oficinas</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('oficinas.create') }}" class="btn btn-primary mb-3">➕ Nueva Oficina</a>

    <table class="table table-bordered table-hover">
        <thead class="table-primary">
            <tr>
                <th>Nombre</th>
                <th>Código</th>
                <th>Gerencia</th>
                <th>Sub Gerencia</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($oficinas as $oficina)
            <tr>
                <td>{{ $oficina->nombre }}</td>
                <td>{{ $oficina->codigo }}</td>
                <td>{{ $oficina->gerencia }}</td>
                <td>{{ $oficina->sub_gerencia }}</td>
                <td>{{ $oficina->descripcion }}</td>
                <td>
                    <a href="{{ route('oficinas.show', $oficina->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('oficinas.edit', $oficina->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('oficinas.destroy', $oficina->id) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Deseas eliminar esta oficina?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
<a href="{{ route('oficinas.exportPdf') }}" class="btn btn-success mb-3">Exportar PDF</a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Paginación --}}
    {{ $oficinas->links() }}
</div>
@endsection
