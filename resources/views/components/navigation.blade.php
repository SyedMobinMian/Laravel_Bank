<div class="navbar">
    <!-- Page Heading -->
    <div class="nav-heading">
        <div class="logo">
            <img src="{{ asset('img/tur.gif') }}" alt="Logo" class="logo-icon">
            
            <span><a href="{{ url('/') }}" class="navbar-brand">{{ config('app.name', 'Laravel') }}</a></span>
        </div>
        
    </div>
    <h1>Welcome, {{ Auth::user()->name }}</h1>
    <!-- Right-Side Profile Section -->
    <div class="profile">
        @guest
            <!-- Show Login and Register Links -->
            @if (Route::has('login'))
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            @endif
            @if (Route::has('register'))
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
        @else
            <!-- User Dropdown Menu -->
            <img src="{{ asset('img/ali-crop.jpg') }}" alt="Profile">

            <span>{{ Auth::user()->name }}</span>
            <div class="profile-dropdown">
                <a href="#">Edit Profile</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        @endguest
    </div>
</div>



{{-- <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
        
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav me-auto">
            <!-- You can add links here -->
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>

 --}}
