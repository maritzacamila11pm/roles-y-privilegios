@extends('layouts.app')

@section('content')
<div class="container">
    <h1>✏️ Editar Oficina</h1>

    <form action="{{ route('oficinas.update', $oficina->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nombre *</label>
            <input type="text" name="nombre" class="form-control" value="{{ $oficina->nombre }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Código</label>
            <input type="text" name="codigo" class="form-control" value="{{ $oficina->codigo }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Gerencia</label>
            <input type="text" name="gerencia" class="form-control" value="{{ $oficina->gerencia }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Sub Gerencia</label>
            <input type="text" name="sub_gerencia" class="form-control" value="{{ $oficina->sub_gerencia }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Descripción</label>
            <textarea name="descripcion" class="form-control" rows="3">{{ $oficina->descripcion }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('oficinas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
