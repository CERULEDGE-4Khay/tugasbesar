@extends('layouts.app') 

@section('content')
<link rel="stylesheet" href="css/login.css" />
<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if (session('error'))
    <script>
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: '{{ session('error') }}',
            confirmButtonColor: '#3085d6'
        });
    </script>
@endif


<div class="container" style="height: 850px;">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <img src="img/pickitup-logo.png" alt="Logo" class="logo" width="100%" />
            <h2>Login</h2>
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
            <div class="input-box" style="position: relative;">
                <input type="password" required="required" name="password" id="password" />
                <span>Password</span>
                <i></i>
                <button type="button" onclick="togglePassword()" class="toggle-btn" 
                    style="position:absolute; right:10px; top:50%; transform:translateY(-50%); border:none; background:none; z-index:10; cursor:pointer;">
                    👁️
                </button>
            </div>
            <button class="btn btn-success mt-3 w-100" type="submit">Login</button>

            <hr class="my-4"/>

            <div class="d-flex justify-content-between align-items-center mb-3">
            <span><a href="/verify" class="btn btn-outline-primary btn-sm">Forgot Password?</a></span>
            <a href="/register" class="btn btn-outline-primary btn-sm">Register</a>
            </div>
            <a href="/" class="btn btn-outline-secondary w-100 d-flex align-items-center justify-content-center gap-2">
            <span>🏠</span>
            <span>Back to Home</span>
            </a>

            <div class="links">
                <a href="{{ route('google.login') }}" class="d-flex align-items-center justify-content-center gap-2 btn btn-outline-secondary" style="width: 100%;">
                    <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg" alt="Google Icon" style="width: 20px; height: 20px;">
                    <span>Login with Google</span>
                </a>
            </div>


        </div>
    </form>
</div>

<script>

    function togglePassword() {
        const passwordField = document.getElementById("password");
        if (passwordField.type === "password") {
            passwordField.type = "text";
        } else {
            passwordField.type = "password";
        }
    }
</script>

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif


@endsection
