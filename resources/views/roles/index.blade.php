@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <div class="d-flex justify-content-between align-items-center p-3 rounded shadow-sm" style="background-color: #6f42c1; color: white;">
            <h2 class="mb-0">Role Management</h2>
            @can('role-create')
                <a class="btn btn-light btn-sm" href="{{ route('roles.create') }}">
                    <i class="fa fa-plus"></i> Create New Role
                </a>
            @endcan
        </div>
    </div>
</div>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<table class="table table-bordered table-hover shadow-sm">
    <thead style="background-color: #e9d8fd; color: #4b0082;">
        <tr>
            <th width="100px">No</th>
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($roles as $key => $role)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $role->name }}</td>
            <td>
                <a class="btn btn-outline-secondary btn-sm" href="{{ route('roles.show',$role->id) }}">
                    <i class="fa-solid fa-list"></i> Show
                </a>
                @can('role-edit')
                    <a class="btn btn-outline-primary btn-sm" href="{{ route('roles.edit',$role->id) }}">
                        <i class="fa-solid fa-pen-to-square"></i> Edit
                    </a>
                @endcan
                @can('role-delete')
                <form method="POST" action="{{ route('roles.destroy', $role->id) }}" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger btn-sm">
                        <i class="fa-solid fa-trash"></i> Delete
                    </button>
                </form>
                @endcan
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{!! $roles->links('pagination::bootstrap-5') !!}

@endsection
