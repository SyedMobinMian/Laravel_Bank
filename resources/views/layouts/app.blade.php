<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Scripts -->
     <!-- Custom CSS -->
     @if (!request()->is('login') && !request()->is('register'))
     <link rel="stylesheet" href="{{ asset('css/major.css') }}">
    @endif
        {{-- <link rel="stylesheet" href="{{ asset('css/major.css') }}"> <!-- Custom CSS --> --}}
        @yield('Login&registration_css') <!-- For page-specific CSS -->
</head>
<body>
    <div class="container" id="container">
        <!-- Navbar Section -->
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            @unless(request()->is('login') || request()->is('register'))
                @include('components.navigation')
            @endunless
        </nav>
        <!-- Body Content Container -->
        
            <!-- Sidebar Section -->
            {{-- <div class="sidebar" id="sidebar">
                @include('components.sidebar')
            </div> --}}


            <div class="container" id="container">
                <!-- Sidebar Section -->
                @auth
                    <div class="sidebar" id="sidebar">
                        @include('components.sidebar')
                    </div>
                @endauth
                
            <!-- Main Content Section -->
            <div class="main-content" id="mainContent">
                @yield('content')
            </div>
    </div>
    <!--  Your custom JavaScript -->
    <script src="{{ asset('js/auth.js') }}"></script>
    <script src="{{ asset('js/major.js') }}"></script>
</body>
</html>