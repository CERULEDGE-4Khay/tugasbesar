@extends('layouts.app')

@section('content')
 {{--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" />

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" />

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" />
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
--}}
<link rel="stylesheet" href="css/login.css" />

<div class="container" style="height: 1050px;">
    <form method="POST" action="{{ route('register')}}">
        @csrf
        <img src="img/pickitup-logo.png" alt="Logo" class="logo" />
        <h2>Register</h2>
        <div class="input-box">
            <input type="text" required="required" />
            <span>Name</span>
            <i></i>
        </div>
        <div class="input-box">
            <input type="text" required="required" />
            <span>Username</span>
            <i></i>
        </div>
        <div class="input-box">
            <input type="text" required="required" />
            <span>Email</span>
            <i></i>
        </div>
        <div class="input-box">
            <input type="password" required="required" />
            <span>Password</span>
            <i></i>
        </div>
        <input type="submit" value="Register" />
        <hr>
        <span>Already have an account? <a href="/login">Login</a></span>
        <div class="links">
            <a href="/">Back to Home</a>
        </div>
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
<footer class="footer">
    <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
    <a href="/" class="logo d-flex align-items-center">
    <span class="sitename">PICKITUP</span></a>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam earum, nemo non laudantium quo culpa laboriosam quia odio neque laborum nulla? Eveniet itaque pariatur vitae provident maiores ipsam enim accusantium!</p>
    </div>
     {{-- <div class="footer-contact pt-3">
            <p>Jl. Babakan Ciparay</p>
            <p>Kota Bandung, BDG 20255</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+62878-7263-4316</span></p>
            <p><strong>Email:</strong> <span>pickitup@gmail.com</span></p>
        </div>
    </div> --}}
    <hr>
     <div class="footer copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">PickItUp</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href=“https://themewagon.com>ThemeWagon
      </div>
    </div>
</footer>
@endsection
