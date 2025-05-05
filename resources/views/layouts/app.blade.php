<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title', 'Perpustakaan Digital')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 text-white font-sans">

    <!-- Navbar -->
    <nav class="bg-gray-900 text-gray-300 shadow-lg py-6">
    <div class="container mx-auto px-6">
        <div class="text-center mb-6">
            @auth
                @if(Auth::user()->role === 'admin')
                    <a href="{{ url('/admin') }}" class="text-3xl font-bold text-cyan-400 hover:text-cyan-300 transition">
                        Perpustakaan Digital
                    </a>
                @else
                    <a href="{{ route('landing') }}" class="text-3xl font-bold text-cyan-400 hover:text-cyan-300 transition">
                        Perpustakaan Digital
                    </a>
                @endif
            @else
                <a href="{{ route('landing') }}" class="text-3xl font-bold text-cyan-400 hover:text-cyan-300 transition">
                    Perpustakaan Digital
                </a>
            @endauth
            <p class="text-sm text-cyan-400 italic mt-1">Menemukan Pengetahuan Tanpa Batas</p>
        </div>

        <!-- Navbar Links -->
        <div class="flex justify-center items-center space-x-8 text-lg font-medium">
            @auth
                @if(Auth::user()->role === 'admin')
                    <a href="{{ url('/admin') }}" class="hover:text-cyan-500 transition-colors duration-300">Beranda</a>
                @else
                    <a href="{{ route('landing') }}" class="hover:text-cyan-500 transition-colors duration-300">Beranda</a>
                @endif
            @else
                <a href="{{ route('landing') }}" class="hover:text-cyan-500 transition-colors duration-300">Beranda</a>
            @endauth

            <a href="{{ route('peminjaman.index') }}" class="hover:text-cyan-500 transition-colors duration-300">Pinjam Buku</a>
            <a href="{{ route('pengembalian.index') }}" class="hover:text-cyan-500 transition-colors duration-300">Pengembalian Buku</a>

            @guest
                <a href="{{ route('login') }}" class="hover:text-cyan-500 transition-colors duration-300">Masuk</a>
                <a href="{{ route('register') }}" class="hover:text-cyan-500 transition-colors duration-300">Daftar</a>
            @else
                <div class="relative group">
                    <button class="flex items-center space-x-2 hover:text-cyan-500 transition-colors duration-300 focus:outline-none">
                        <span>{{ Auth::user()->name }}</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" >
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="absolute right-0 mt-2 w-40 bg-gray-800 rounded-md shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-200 z-10">
                        <a href="{{ route('profile') }}" class="block px-4 py-2 text-gray-200 hover:bg-cyan-500 hover:text-white">Profil</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2 text-gray-200 hover:bg-red-600 hover:text-white">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            @endguest
        </div>
    </div>
</nav>


    <!-- Main Content -->
    <main class="container mx-auto px-6 py-12">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-400 py-6">
        <div class="container mx-auto text-center">
            <p class="text-sm">
                &copy; 2025 Perpustakaan Digital. Semua Hak Dilindungi.
            </p>
        </div>
    </footer>

</body>
</html>
