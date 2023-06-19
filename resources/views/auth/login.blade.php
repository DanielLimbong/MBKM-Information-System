@extends("layouts.auth")

@section("content")
          <!-- Register -->
      <div class="card">
        <div class="card-body">
          <!-- Logo -->
          @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
          @if(session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

          <div class="app-brand justify-content-center">
            <a href="index.html" class="app-brand-link gap-2">
              <span class="app-brand-logo demo">
                <img src="{{ ("img/with_text.png") }}" alt="">
              </span>
              <span class="app-brand-text demo h3 mb-0 fw-bold"></span>
            </a>
          </div>
          <!-- /Logo -->
          <h4 class="mb-2">LOGIN</h4>
          <p class="mb-4"></p>

          <form id="formAuthentication" class="mb-3" action="{{route('actionlogin')}}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="email" class="form-label">Email or Username</label>
              <input type="text" class="form-control" id="email" name="username" placeholder="Enter your email or username" autofocus>
            </div>
            <div class="mb-3 form-password-toggle">
              <div class="d-flex justify-content-between">
                <label class="form-label" for="password">Password</label>
                <a href="auth-forgot-password-basic.html">
                  <small>Forgot Password?</small>
                </a>
              </div>
              <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
            </div>
            <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember-me">
                <label class="form-check-label" for="remember-me">
                  Remember Me
                </label>
              </div>
            </div>
            <div class="mb-4">
              <button type="submit" class= "btn btn rounded-pill btn-primary d-grid w-90 mb-3">LOGIN</a>
            </div>
          </form>

          <p class="text-center">
            <span>Don't have an account?</span>
            <a href="{{route("getRegister")}}">
              <span>Create an account</span>
            </a>
          </p>

          </div>
        </div>
      </div>
      <!-- /Register -->
@endsection