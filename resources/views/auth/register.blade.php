@include('public.includes.login_header')
            <div class="col-md-7">
                <form method="POST" action="{{ route('register') }}" class="text-center h-100 px-3 d-flex flex-column justify-content-center">
                    @csrf
                    <h3 class="fw-semibold mb-5">{{ __('REGISTRATION FORM') }}</h3>

                    <div class="form-group d-flex mb-3">
                        <input id="name" type="text" class="form-control me-2 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="{{ __('First Name') }}">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" placeholder="{{ __('Last Name') }}">
                        @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="input-group mb-3">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('Email Address') }}">
                        <img src="{{ asset('assests/images/email-svgrepo-com.svg') }}" alt="" class="input-group-text">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="input-group mb-3">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="{{ __('Password') }}">
                        <img src="{{ asset('assests/images/password-svgrepo-com.svg') }}" alt="" class="input-group-text">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="input-group mb-5">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Confirm Password') }}">
                        <img src="{{ asset('assests/images/password-svgrepo-com.svg') }}" alt="" class="input-group-text">
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-dark px-5 mb-2">
                        {{ __('REGISTER') }}
                        <img src="{{ asset('assests/images/arrow-sm-right-svgrepo-com.svg') }}" alt="">
                    </button>

                    <a href="{{ route('login') }}" class="fw-semibold fs-6 text-decoration-none text-dark">{{ __('Already have an account?') }}</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
