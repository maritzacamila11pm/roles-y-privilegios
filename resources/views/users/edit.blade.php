@extends('layouts.app')

@section('content')
<div class="row mb-4">
    <div class="col-lg-12 d-flex justify-content-between align-items-center">
        <h2 class="text-primary fw-bold fst-italic">Edit User</h2>
        <a class="btn btn-outline-primary btn-sm rounded-pill shadow-sm" href="{{ route('users.index') }}">
            <i class="fa fa-arrow-left me-1"></i> Back
        </a>
    </div>
</div>

@if (count($errors) > 0)
    <div class="alert alert-danger bg-opacity-10 border border-danger rounded-3 text-danger shadow-sm">
      <strong>Whoops!</strong> There were some problems with your input.<br><br>
      <ul class="mb-0 ps-3">
         @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
         @endforeach
      </ul>
    </div>
@endif

<form method="POST" action="{{ route('users.update', $user->id) }}" class="shadow p-4 rounded-4 bg-light">
    @csrf
    @method('PUT')

    <div class="row g-4">
        <div class="col-12">
            <label class="form-label fw-semibold text-primary">Name:</label>
            <input type="text" name="name" placeholder="Name"
                   class="form-control border border-primary rounded-pill px-4 py-2"
                   value="{{ $user->name }}">
        </div>
        <div class="col-12">
            <label class="form-label fw-semibold text-primary">Email:</label>
            <input type="email" name="email" placeholder="Email"
                   class="form-control border border-primary rounded-pill px-4 py-2"
                   value="{{ $user->email }}">
        </div>
        <div class="col-12">
            <label class="form-label fw-semibold text-primary">Password:</label>
            <input type="password" name="password" placeholder="Password"
                   class="form-control border border-primary rounded-pill px-4 py-2">
        </div>
        <div class="col-12">
            <label class="form-label fw-semibold text-primary">Confirm Password:</label>
            <input type="password" name="confirm-password" placeholder="Confirm Password"
                   class="form-control border border-primary rounded-pill px-4 py-2">
        </div>
        <div class="col-12">
            <label class="form-label fw-semibold text-primary">Role:</label>
            <select name="roles[]" class="form-select border border-primary rounded-pill" multiple>
                @foreach ($roles as $value => $label)
                    <option value="{{ $value }}" {{ isset($userRole[$value]) ? 'selected' : ''}}>
                        {{ $label }}
                    </option>
                 @endforeach
            </select>
        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary btn-sm mt-3 fw-semibold rounded-pill shadow-sm px-4">
                <i class="fa-solid fa-floppy-disk me-1"></i> Submit
            </button>
        </div>
    </div>
</form>

<p class="text-center text-muted mt-4 fst-italic"><small>Tutorial by ItSolutionStuff.com</small></p>
@endsection
