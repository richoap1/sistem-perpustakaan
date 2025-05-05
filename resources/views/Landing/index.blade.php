@extends('layouts.app')

@section('content')
<!-- Hero Section -->
    <section class="hero-section flex items-center justify-center h-screen bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1512820790803-83ca734da794?auto=format&fit=crop&w=1600&q=80');">
        <div class="text-center bg-black bg-opacity-50 p-8 rounded-lg">
            <h1 class="text-5xl md:text-6xl font-extrabold text-gray-200 mb-4">
                Selamat Datang di Perpustakaan Digital
            </h1>
            <p class="text-lg md:text-2xl text-gray-300 mb-6">
                Menemukan pengetahuan tanpa batas, kapan saja, di mana saja.
            </p>
            <a href="/books" class="inline-block bg-cyan-500 text-white px-8 py-3 text-lg font-semibold rounded-full hover:bg-cyan-400 transition-all duration-300">
                Jelajahi Sekarang
            </a>
        </div>
    </section>

    <!-- Explore Section -->
    <section id="explore" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800">Jelajahi Koleksi Kami</h2>
                <p class="text-lg text-gray-600 mt-4">
                    Temukan buku digital dan materi perpustakaan terbaru kami, mulai dari fiksi hingga literatur ilmiah.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="card bg-gray-100 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="card-icon text-4xl text-cyan-500 mb-4">📚</div>
                    <h3 class="card-title text-2xl font-semibold text-gray-800 mb-2">Buku Fiksi</h3>
                    <p class="card-text text-gray-600">
                        Baca berbagai cerita fiksi yang menegangkan dan menghibur dari seluruh dunia.
                    </p>
                </div>
                <!-- Card 2 -->
                <div class="card bg-gray-100 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="card-icon text-4xl text-cyan-500 mb-4">📖</div>
                    <h3 class="card-title text-2xl font-semibold text-gray-800 mb-2">Literatur Ilmiah</h3>
                    <p class="card-text text-gray-600">
                        Akses jurnal ilmiah dan penelitian terbaru untuk memperluas wawasan akademik Anda.
                    </p>
                </div>
                <!-- Card 3 -->
                <div class="card bg-gray-100 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="card-icon text-4xl text-cyan-500 mb-4">👶</div>
                    <h3 class="card-title text-2xl font-semibold text-gray-800 mb-2">Buku Anak</h3>
                    <p class="card-text text-gray-600">
                        Temukan buku-buku menarik yang dirancang untuk merangsang imajinasi dan perkembangan anak.
                    </p>
                </div>
            </div>
        </div>
    </section>
    @endsection