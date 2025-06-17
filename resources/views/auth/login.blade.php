@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="css/login.css">

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
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

                        <div class="row mb-0">
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
</div> --}}


<div class="container" style="height: 820px">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <img src="img/pickitup-logo.png" alt="Logo" class="logo" width="100%"> 
            <h2>Sign In</h2>
            <div class="input-box">
            <input type="text" required="required" name="name">
            <span>Username</span>
            <i></i>
            </div>
            <div class="input-box">
            <input password="password" required="required" name="password">
            <span>Password</span>
            <i></i>
            </div>
            <div class="links">
            <a href="#">Forgot Password?</a>
            <a href="/register">Sign Up</a>
            <a href="/">Back to Home</a>
            </div>
            <input type="submit" value="Login">
            <div class="links">
            {{-- <a href="#" class="border" style="display: block">Already Have an Account?</a> --}}
            <a href="" class="d-block btn btn-outline-secondary" style="width: 100%">
                Google
            </a>
        </div>
        <div class="links">
            <a href="" class="d-block btn btn-outline-primary" style="width: 100%">
                facebook
            </a>
        </div>
        </form>
    </div>    
@endsection
