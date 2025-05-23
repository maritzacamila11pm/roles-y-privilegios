@extends('layouts.app')

@section('content')
<main class="main" id="top">
  <div class="container-fluid">
    <div class="row min-vh-100 flex-center g-0">
      <div class="col-lg-8 col-xxl-5 py-3 position-relative">
        <img class="bg-auth-circle-shape" src="assets/img/icons/spot-illustrations/bg-shape.png" alt="" width="250">
        <img class="bg-auth-circle-shape-2" src="assets/img/icons/spot-illustrations/shape-1.png" alt="" width="150">
        <div class="card overflow-hidden z-1">
          <div class="card-body p-0">
            <div class="row g-0 h-100">
              <div class="col-md-5 text-center bg-card-gradient">
                <div class="position-relative p-4 pt-md-5 pb-md-7">
                  <div class="bg-holder bg-auth-card-shape" style="background-image:url(assets/img/icons/spot-illustrations/half-circle.png);"></div>
                  <div class="z-1 position-relative">
                    <a class="link-light mb-4 font-sans-serif fs-4 d-inline-block fw-bolder" href="#">falcon</a>
                    <p class="opacity-75 text-white">Focus on functionality, we’ll handle the UI.</p>
                  </div>
                </div>
                <div class="mt-3 mb-4 mt-md-4 mb-md-5">
                  <p class="pt-3 text-white">Already have an account?<br>
                    <a class="btn btn-outline-light mt-2 px-4" href="{{ route('login') }}">Log In</a>
                  </p>
                </div>
              </div>
              <div class="col-md-7 d-flex flex-center">
                <div class="p-4 p-md-5 flex-grow-1">
                  <h3>{{ __('Register') }}</h3>
                  <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                      <label class="form-label" for="name">Name</label>
                      <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" value="{{ old('name') }}" required autocomplete="name" autofocus>
                      @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="mb-3">
                      <label class="form-label" for="email">Email address</label>
                      <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" type="email" value="{{ old('email') }}" required autocomplete="email">
                      @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="row gx-2">
                      <div class="mb-3 col-sm-6">
                        <label class="form-label" for="password">Password</label>
                        <input class="form-control @error('password') is-invalid @enderror" id="password" name="password" type="password" required autocomplete="new-password">
                        @error('password')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3 col-sm-6">
                        <label class="form-label" for="password-confirm">Confirm Password</label>
                        <input class="form-control" id="password-confirm" name="password_confirmation" type="password" required autocomplete="new-password">
                      </div>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="terms" required>
                      <label class="form-label" for="terms">I accept the <a href="#">terms</a> and <a href="#">privacy policy</a></label>
                    </div>

                    <div class="mb-3">
                      <button class="btn btn-primary d-block w-100 mt-3" type="submit">{{ __('Register') }}</button>
                    </div>
                  </form>

                  <div class="position-relative mt-4">
                    <hr>
                    <div class="divider-content-center">or register with</div>
                  </div>
                  <div class="row g-2 mt-2">
                    <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100" href="#"><span class="fab fa-google-plus-g me-2"></span> Google</a></div>
                    <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100" href="#"><span class="fab fa-facebook-square me-2"></span> Facebook</a></div>
                  </div>
                </div> <!-- /.p-4 -->
              </div> <!-- /.col-md-7 -->
            </div> <!-- /.row -->
          </div> <!-- /.card-body -->
        </div> <!-- /.card -->
      </div> <!-- /.col -->
    </div> <!-- /.row -->
  </div> <!-- /.container-fluid -->
</main>
@endsection
