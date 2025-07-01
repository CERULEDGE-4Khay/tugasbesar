@extends('layouts.app') @section('content') 
<link rel="stylesheet" href="css/login.css" />

<div class="container" style="height: 1050px;">
    <form method="POST" action="{{ route('register')}}">
        @csrf
        <img src="img/pickitup-logo.png" alt="Logo" class="logo" />
        <h2>Register</h2>
        <div class="input-box">
            <input type="text" required="required" name="name"/>
            <span>Name</span>
            <i></i>
        </div>
        @error('name')
            <span class="" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <div class="input-box">
            <input type="email" required="required" name="email" />
            <span>Email</span>
            <i></i>
        </div>
        @error('email')
            <span class="" role="alert">
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
        @error('password')
            <span class="" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <div class="input-box">
            <input type="password" required="required" name="password_confirmation" id="password_confirmation" />
            <span>Connfirm Password</span>
            <button type="button" onclick="togglePasswordConfirm()" class="toggle-btn" 
                    style="position:absolute; right:10px; top:50%; transform:translateY(-50%); border:none; background:none; z-index:10; cursor:pointer;">
                    👁️
                </button>
        </div>
        <button class="btn btn-success mt-3 w-100" type="submit">Register</button>
        <hr />
        <div class="links">
            <span>Already have an account?</span>
            <a href="/login">Login</a>
        </div>
        <div class="links">
            <a href="/">Back to Home</a>
        </div>
        <div class="links">
            <a href="" class="d-block btn btn-outline-secondary" style="width: 100%;">
                Google
            </a>
        </div>
        <div class="links">
            <a href="" class="d-block btn btn-outline-primary" style="width: 100%;">
                facebook
            </a>
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

    function togglePasswordConfirm() {
        const passwordField = document.getElementById('password_confirmation');
        if (passwordField.type === "password_confitmation") {
            passwordField.type = "text";
        } else {
            passwordField.type = "password_confirmation"
        }
    }
</script>
@endsection
