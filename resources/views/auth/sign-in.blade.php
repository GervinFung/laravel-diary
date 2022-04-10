@extends('layouts.app')
<link href="{{ URL::asset('scss/auth/sign-in.css') }}" rel="stylesheet">

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>
                    Welcome back to Journivia
                </h2>
            </div>

            <div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div>
                        <label for="email">{{ __('Email Address') }}</label>
                        @error('email')
                            <span class="error-msg" role="alert">
                                <strong>*{{ $message }}*</strong>
                            </span>
                        @enderror
                        <div>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required
                                autocomplete="email" autofocus placeholder="Email">
                        </div>
                    </div>

                    <div>
                        <label for="password">{{ __('Password') }}</label>
                        @error('password')
                            <span class="error-msg" role="alert">
                                <strong>*{{ $message }}*</strong>
                            </span>
                        @enderror
                        <div>
                            <input id="password" type="password" name="password" required autocomplete="current-password"
                                placeholder="Password">

                        </div>
                    </div>

                    <div class="selection">
                        <div class="remember-me-container">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label for="remember">Remember Me</label>
                        </div>
                        @if (Route::has('password.request'))
                            <div>
                                <a href="{{ route('password.request') }}">Forgotten Password?</a>
                            </div>
                        @endif
                    </div>

                    <div class="btn-container">
                        <button type="submit" class="btn sign-in-btn">
                            Sign In
                        </button>
                    </div>

                    <hr class="horizontal-line" />

                    <div class="alternative-solution">Don't have an account?</div>

                    <div class="btn-container">
                        <a href="/sign-up" class="btn sign-up-btn">
                            Create an account
                        </a>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <script src="{{ URL::asset('js/app.js') }}"></script>
@endsection
