@extends('layouts.app')

@section('content')
<div class="row mb-3">
    <div class="col-lg-12 d-flex justify-content-between align-items-center">
        <h2 class="text-dark">Create New User</h2>
        <a class="btn btn-primary btn-sm" href="{{ route('users.index') }}">
            <i class="fa fa-arrow-left"></i> Back
        </a>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger bg-opacity-25 border border-danger">
      <strong>Whoops!</strong> There were some problems with your input.<br><br>
      <ul>
         @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
         @endforeach
      </ul>
    </div>
@endif

<div class="card bg-light shadow-sm p-4 rounded border border-0" style="background-color: #f8f9fa;">
    <form method="POST" action="{{ route('users.store') }}">
        @csrf
        <div class="row g-3">
            <div class="col-12">
                <label class="form-label fw-bold text-secondary">Name:</label>
                <input type="text" name="name" placeholder="Name" class="form-control border-primary" >
            </div>
            <div class="col-12">
                <label class="form-label fw-bold text-secondary">Email:</label>
                <input type="email" name="email" placeholder="Email" class="form-control border-primary" >
            </div>
            <div class="col-12">
                <label class="form-label fw-bold text-secondary">Password:</label>
                <input type="password" name="password" placeholder="Password" class="form-control border-primary" >
            </div>
            <div class="col-12">
                <label class="form-label fw-bold text-secondary">Confirm Password:</label>
                <input type="password" name="confirm-password" placeholder="Confirm Password" class="form-control border-primary" >
            </div>
            <div class="col-12">
                <label class="form-label fw-bold text-secondary">Role:</label>
                <select name="roles[]" class="form-select border-primary" multiple>
                    @foreach ($roles as $value => $label)
                        <option value="{{ $value }}">{{ $label }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-outline-primary btn-sm mt-3 fw-semibold">
                    <i class="fa-solid fa-floppy-disk"></i> Submit
                </button>
            </div>
        </div>
    </form>
</div>

<p class="text-center text-secondary mt-4"><small>Tutorial by ItSolutionStuff.com</small></p>
@endsection
