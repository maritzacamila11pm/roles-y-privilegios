@extends('layouts.app')

@section('content')
<div class="row mb-4">
    <div class="col-lg-12 d-flex justify-content-between align-items-center">
        <h2 class="text-primary fw-bold">Users Management</h2>
        <a class="btn btn-primary mb-2 rounded-pill shadow-sm" href="{{ route('users.create') }}">
            <i class="fa fa-plus me-1"></i> Create New User
        </a>
    </div>
</div>

@session('success')
    <div class="alert alert-success alert-dismissible fade show rounded-3 shadow-sm" role="alert">
        {{ $value }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endsession

<div class="table-responsive shadow-sm rounded-4 overflow-hidden">
<table class="table table-bordered table-hover align-middle mb-0 bg-white">
   <thead class="table-primary">
     <tr>
         <th scope="col" class="text-center">No</th>
         <th scope="col">Name</th>
         <th scope="col">Email</th>
         <th scope="col">Roles</th>
         <th scope="col" class="text-center" style="width: 280px;">Action</th>
     </tr>
   </thead>
   <tbody>
   @foreach ($data as $key => $user)
    <tr>
        <td class="text-center">{{ ++$i }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
          @if(!empty($user->getRoleNames()))
            @foreach($user->getRoleNames() as $v)
               <span class="badge bg-info text-dark me-1">{{ $v }}</span>
            @endforeach
          @endif
        </td>
        <td class="text-center">
             <a class="btn btn-outline-primary btn-sm rounded-pill me-1 px-3" href="{{ route('users.show',$user->id) }}">
                <i class="fa-solid fa-list me-1"></i> Show
             </a>
             <a class="btn btn-outline-warning btn-sm rounded-pill me-1 px-3" href="{{ route('users.edit',$user->id) }}">
                <i class="fa-solid fa-pen-to-square me-1"></i> Edit
             </a>
              <form method="POST" action="{{ route('users.destroy', $user->id) }}" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-outline-danger btn-sm rounded-pill px-3"
                          onclick="return confirm('Are you sure you want to delete this user?')">
                    <i class="fa-solid fa-trash me-1"></i> Delete
                  </button>
              </form>
        </td>
    </tr>
 @endforeach
   </tbody>
</table>
</div>

<div class="mt-3">
    {!! $data->links('pagination::bootstrap-5') !!}
</div>

@endsection
