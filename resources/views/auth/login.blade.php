@extends('layouts.app')
@section('Login&registration_css')
    <!-- Include CSS specific to the Register page -->
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container" id="container">
        <div class="form-container sign-in">

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h1>Ijazat Nama</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <hr /><h1>OR</h1><hr />
                <span>Login With Your Email & Password</span>
                <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus />
                <input type="password" name="password" placeholder="Password" required />
                <button type="submit">Login</button>
            </form>
        </div>

        <div class="form-container sign-up">
            <!-- Sign Up Form -->
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h1>Dakhila</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <hr /><h1>OR</h1><hr />
                <span>Fill Out The Following Info For Registration</span>
                <input type="text" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus />
                <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" required />
                <input type="password" name="password" placeholder="Password" required />
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required />
                <button type="submit">Sign Up</button>
            </form>
        </div>

        <!-- ################ Toggler ################ -->
        <div class="toggle-container">
            <div class="toggle">
                
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Provide your personal details to use all features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello</h1>
                    <p>New Surfer Register here for all features on our site</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        const container = document.getElementById('container');
        const registerBtn = document.getElementById('register');
        const loginBtn = document.getElementById('login');

        registerBtn.addEventListener('click', () => {
            container.classList.add("active");
        });

        loginBtn.addEventListener('click', () => {
            container.classList.remove("active");
        });
    </script>
@endsection
