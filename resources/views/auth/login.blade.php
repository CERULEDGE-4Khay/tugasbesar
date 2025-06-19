@extends('layouts.app') 

@section('content')
<link rel="stylesheet" href="css/login.css" />

<div class="container" style="height: 820px;">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <img src="img/pickitup-logo.png" alt="Logo" class="logo" width="100%" />
            <h2>Sign In</h2>
            <div class="input-box">
                <input type="text" required="required" name="email" />
                <span>Email</span>
                <i></i>
            </div>
            @error('email')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="input-box">
                <input type="password" required="required" name="password" />
                <span>Password</span>
                <i></i>
            </div>
            <button class="btn btn-success mt-3 w-100" type="submit">Login</button>
            <hr />
            <div class="links">
                <a href="/verify">Forgot Password?</a>
                <a href="/register">Sign Up</a>
                <a href="/">Back to Home</a>
            </div>
            <div class="links">
                <a href="" class="d-block btn btn-outline-secondary" style="width: 100%;">
                    Google
                </a>
            </div>
        </div>
        <div class="links">
            <a href="" class="d-block btn btn-outline-primary" style="width: 100%;">
                facebook
            </a>
        </div>
    </form>
</div>
{{-- <footer class="footer">
    <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
            <a href="/" class="logo d-flex align-items-center"> <span class="sitename">PICKITUP</span></a>
        </div>
    </div>        
    <hr/>
    <div class="footer copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">PickItUp</strong> <span>All Rights Reserved</span></p>
        <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href=“https://themewagon.com>ThemeWagon
        </div>
    </div>
</footer> --}}

@endsection
