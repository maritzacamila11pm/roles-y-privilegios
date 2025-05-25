@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <div class="d-flex justify-content-between align-items-center p-3 rounded shadow-sm" style="background-color: #6f42c1; color: white;">
            <h2 class="mb-0">Edit Role</h2>
            <a class="btn btn-light btn-sm" href="{{ route('roles.index') }}">
                <i class="fa fa-arrow-left"></i> Back
            </a>
        </div>
    </div>
</div>

@if (count($errors) > 0)
    <div class="alert alert-danger shadow-sm">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('roles.update', $role->id) }}" class="shadow-sm p-4 rounded" style="background-color: #f8f9fa;">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label"><strong>Name:</strong></label>
        <input type="text" name="name" value="{{ $role->name }}" class="form-control" placeholder="Enter role name">
    </div>

    <div class="mb-3">
        <label class="form-label"><strong>Permissions:</strong></label>
        <div class="row">
            @foreach($permission as $value)
                <div class="col-md-4 mb-1">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="permission[{{$value->id}}]" value="{{ $value->id }}"
                               {{ in_array($value->id, $rolePermissions) ? 'checked' : '' }}>
                        <label class="form-check-label">{{ $value->name }}</label>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-outline-primary btn-sm">
            <i class="fa-solid fa-floppy-disk"></i> Update
        </button>
    </div>
</form>

<p class="text-center text-muted mt-4"><small>de Maritza y Yadira 💜</small></p>
@endsection
