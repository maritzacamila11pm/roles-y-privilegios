@extends('layouts.app')

@section('content')
<div class="container">
    <h1>➕ Registrar Nueva Oficina</h1>

    <form action="{{ route('oficinas.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nombre *</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Código</label>
            <input type="text" name="codigo" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Gerencia</label>
            <input type="text" name="gerencia" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Sub Gerencia</label>
            <input type="text" name="sub_gerencia" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Descripción</label>
            <textarea name="descripcion" class="form-control" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('oficinas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
