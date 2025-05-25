@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <div class="d-flex justify-content-between align-items-center p-3 rounded shadow-sm" style="background-color: #6f42c1; color: white;">
            <h2 class="mb-0">Show Role</h2>
            <a class="btn btn-light btn-sm" href="{{ route('roles.index') }}">
                <i class="fa fa-arrow-left"></i> Back
            </a>
        </div>
    </div>
</div>

<div class="shadow-sm p-4 rounded" style="background-color: #f8f9fa;">
    <div class="mb-3">
        <h5><strong>Name:</strong></h5>
        <p class="fs-5">{{ $role->name }}</p>
    </div>
    <div class="mb-3">
        <h5><strong>Permissions:</strong></h5>
        @if(!empty($rolePermissions))
            @foreach($rolePermissions as $v)
                <span class="badge bg-success me-1 mb-1">{{ $v->name }}</span>
            @endforeach
        @else
            <p>No permissions assigned.</p>
        @endif
    </div>
</div>

@endsection
