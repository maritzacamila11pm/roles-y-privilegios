@extends('layouts.app')

@section('content')
<div class="container">
    <h1>🏢 Detalles de la Oficina</h1>

    <div class="card">
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $oficina->nombre }}</p>
            <p><strong>Código:</strong> {{ $oficina->codigo }}</p>
            <p><strong>Gerencia:</strong> {{ $oficina->gerencia }}</p>
            <p><strong>Sub Gerencia:</strong> {{ $oficina->sub_gerencia }}</p>
            <p><strong>Descripción:</strong> {{ $oficina->descripcion }}</p>
        </div>
    </div>

    <a href="{{ route('oficinas.index') }}" class="btn btn-secondary mt-3">⬅ Volver</a>
</div>
@endsection
