<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        @keyframes gradient {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 0.8; }
            50% { transform: scale(1.2); opacity: 1; }
        }
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }
        .animate-gradient {
            animation: gradient 12s ease infinite;
        }
        .animate-pulse {
            animation: pulse 2s infinite;
        }
        .animate-float {
            animation: float 3s ease-in-out infinite;
        }
        .palatine {
            opacity: 0.1;
            position: absolute;
            z-index: 0;
            transform: translate(-50%, -50%);
            max-width: 80%;
            max-height: 80%;
        }
        /* Tilted header image */
        .header-logo {
            position: absolute;
            top: 15px; /* Adjust the top margin */
            left: 15px; /* Adjust the left margin */
            width: 210px;
            height: 210px;
            transform: rotate(-40deg); /* Tilt the image */
            z-index: 5; /* Ensures the image stays on top */
        }
    </style>
</head>
<body class="font-sans bg-gray-900 text-white">
    
    <!-- Background -->
    <div class="relative overflow-hidden min-h-screen bg-gradient-to-br from-purple-600 via-pink-500 to-indigo-600 animate-gradient">
        <!-- Palatine Image -->
        <img src="{{ asset('img/palatine.png') }}" alt="Palatine" class="palatine top-1/2 left-1/2">

        <!-- Floating Circles Animation -->
        <div class="absolute top-0 left-0 w-24 h-24 bg-white rounded-full opacity-20 animate-pulse"></div>
        <div class="absolute top-1/4 right-1/3 w-32 h-32 bg-white rounded-full opacity-10 animate-pulse"></div>
        <div class="absolute bottom-1/4 left-1/4 w-40 h-40 bg-white rounded-full opacity-10 animate-pulse"></div>

        <!-- Center Content -->
        <div class="relative z-10 flex flex-col items-center justify-center min-h-screen space-y-6 text-center">
            <!-- Centered Image -->
            <img src="{{ asset('img/Tauhid.png') }}" alt="Logo" class="w-50 h-48 rounded-full shadow-lg animate-float">
            
            <!-- Title and Subtitle -->
            <h1 class="text-5xl font-bold tracking-wide uppercase">Syed Mubeen Ali Mian</h1>
            <p class="text-xl text-white/80">Full-Stack Developer and Project Manager</p>
            
            <!-- Buttons -->
            @if (Route::has('login'))
            <div class="mt-6 space-x-4">
                @auth
                    <a href="{{ url('/home') }}" class="px-4 py-2 bg-white text-purple-600 rounded-lg hover:bg-gray-100 transition">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="px-6 py-3 text-lg font-medium text-white bg-purple-600 rounded-lg shadow-md hover:bg-purple-700 transition">
                    Log in
                </a>
                {{-- @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="px-6 py-3 text-lg font-medium text-purple-600 bg-white rounded-lg shadow-md hover:bg-gray-100 transition">
                        Register
                    </a>
                @endif --}}
                @endauth
            </div>
            @endif
        </div>

        <!-- Navigation -->
        <header class="absolute top-0 left-0 w-full p-6">
            <div class="flex justify-between max-w-6xl mx-auto">
                <!-- Header Logo: Left corner, tilted -->
                <img src="{{ asset('img/Filasteen_blood.png') }}" alt="Logo" class="header-logo">
            </div>
        </header>
    </div>
    

</body>
</html>
C:\Dockland\Laravel\testskill6\public\audio