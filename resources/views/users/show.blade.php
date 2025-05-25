@extends('layouts.app')

@section('content')
<div class="row mb-3">
    <div class="col-lg-12 d-flex justify-content-between align-items-center">
        <h2 class="fw-bold text-dark">Show User</h2>
        <a class="btn btn-outline-info btn-sm shadow-sm" href="{{ route('users.index') }}">
            <i class="fa fa-arrow-left me-1"></i> Back
        </a>
    </div>
</div>

<div class="row g-3">
    <div class="col-12">
        <div class="p-3 rounded shadow-sm" style="background-color: #e0f7fa;">
            <strong class="text-info">Name:</strong>
            <p class="mb-0 fw-semibold text-success">{{ $user->name }}</p>
        </div>
    </div>

    <div class="col-12">
        <div class="p-3 rounded shadow-sm" style="background-color: #e0f7fa;">
            <strong class="text-info">Email:</strong>
            <p class="mb-0 fw-semibold text-success">{{ $user->email }}</p>
        </div>
    </div>

    <div class="col-12">
        <div class="p-3 rounded shadow-sm" style="background-color: #e0f7fa;">
            <strong class="text-info">Roles:</strong><br>
            @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $v)
                    @php
                        $colors = [
                            'Admin' => 'success',      // verde bootstrap
                            'Editor' => 'info',        // celeste bootstrap
                            'User' => 'secondary',     // gris
                            'Guest' => 'info',
                        ];
                        $colorClass = $colors[$v] ?? 'secondary';
                    @endphp
                    <span class="badge rounded-pill bg-{{ $colorClass }} me-1 text-white">{{ $v }}</span>
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection
