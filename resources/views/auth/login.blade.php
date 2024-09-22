@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@include('public.includes.login_header')

        <div class="col-md-7">
            <form method="POST" action="{{ route('login') }}" class="text-center h-100 px-3 d-flex flex-column justify-content-center">
                @csrf

                <h3 class="fw-semibold mb-5">LOGIN FORM</h3>

                <div class="input-group mb-3">
                    <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <img src="{{ asset('assests/images/user-svgrepo-com.svg') }}" alt="" class="input-group-text">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <img src="{{ asset('assests/images/password-svgrepo-com.svg') }}" alt="" class="input-group-text">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <button class="btn btn-dark px-5 mb-2">
                    LOGIN
                    <img src="{{ asset('assests/images/arrow-sm-right-svgrepo-com.svg') }}" alt="">
                </button>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif

                <a href="{{ route('register') }}" class="fw-semibold fs-6 text-decoration-none text-dark">New User?</a>
            </form>
        </div>
    </div>
</div>

