@extends('layouts.app')

@section('content')
<div class="container">
    {{-- <div class="login-wrapper">
        <img src="../pics/student-login-icon.png" class="avatar">
        <h1>Student Portal</h1>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <p>{{ __('E-Mail Address') }}</p>
            <div class="form-group row">
                <!--class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"-->
                <input type="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                        name="email"  placeholder="Enter Username" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <!-- Password -->
            <p>{{ __('Password') }}</p>
            <div class="form-group row">
                <input type="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                        name="password" placeholder="Enter Password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <!-- Remember Me -->
            {{-- <div class="form-group row">
                <div class="form-check">
                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}

                    <input type="checkbox" id="remember"  class="form-check-input"
                            name="remember" {{ old('remember') ? 'checked' : '' }}>
                    </label>
                </div>
            </div>

            <!-- Login -->
            <div class="">
                <button type="submit">{{ __('Login') }}</button>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </form>
        <div class="login-links">
            <p id="simple">Don't have an account? <a href="/">Sign Up.</a></p>
            <p id="simple">Not a student? <a href="/organizer-portal">Sign in as Organizer.</a></p><br>
        </div>
    </div> --}}

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
