@extends('layouts.app')

@section('title', 'Berita - Cakrawala Muda Indonesia')

@section('content')
<!-- Hero Section dengan Background Gambar -->
<div class="relative h-96 md:h-screen max-h-screen overflow-hidden">
    <img src="https://asiafoundation.org/wp-content/uploads/2024/09/YSEALI-Sustainable-and-Inclusive-Tourism-1.jpg" 
         alt="Pemuda Indonesia dalam kegiatan komunitas" 
         class="absolute inset-0 w-full h-full object-cover">

    <!-- Overlay Gelap -->
    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/70 to-transparent"></div>

    <!-- Konten Hero -->
    <div class="relative h-full flex flex-col justify-center items-center px-4 sm:px-6 lg:px-8 text-center text-white">
        <div class="max-w-4xl mx-auto space-y-8">
            <div class="inline-flex items-center gap-3 px-8 py-4 bg-white/20 backdrop-blur-md rounded-full text-lg font-semibold border border-white/30">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                </svg>
                <span>Berita & Artikel Terkini</span>
            </div>

            <h1 class="text-5xl md:text-7xl font-bold leading-tight">
                Berita <span class="text-yellow-300">Cakrawala Muda</span>
            </h1>

            <p class="text-xl md:text-2xl text-blue-100 max-w-3xl mx-auto leading-relaxed">
                Ikuti update terbaru seputar program, kegiatan volunteering, dan kisah inspiratif dari komunitas pemuda Indonesia.
            </p>
        </div>
    </div>

    <!-- Wave Bottom -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 120L60 100C120 80 240 40 360 35C480 30 600 60 720 75C840 90 960 90 1080 85C1200 80 1320 70 1380 65L1440 60V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="white" />
        </svg>
    </div>
</div>

<!-- Search Section (Sticky) -->
<div class="bg-white shadow-lg py-8 sticky top-0 z-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <form method="GET" action="{{ route('berita.index') }}" class="flex flex-col md:flex-row gap-4 items-center">
            <div class="flex-1 relative w-full">
                <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari berita atau artikel..." 
                       class="w-full pl-14 pr-6 py-4 border-2 border-gray-300 rounded-full focus:outline-none focus:ring-4 focus:ring-blue-300 focus:border-blue-500 transition-all text-lg">
            </div>

            <button type="submit" class="px-10 py-4 bg-blue-600 text-white rounded-full font-bold text-lg hover:bg-blue-700 hover:shadow-xl transition-all duration-300">
                Cari Berita
            </button>

            @if(request('search'))
            <a href="{{ route('berita.index') }}" class="px-8 py-4 bg-gray-200 text-gray-700 rounded-full font-bold hover:bg-gray-300 transition-all duration-300">
                Reset Pencarian
            </a>
            @endif
        </form>
    </div>
</div>

<!-- News Grid -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    @if($beritas->isEmpty())
    <div class="text-center py-20">
        <svg class="mx-auto h-24 w-24 text-gray-300 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
        </svg>
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Tidak Ada Berita Ditemukan</h3>
        <p class="text-lg text-gray-600">Coba kata kunci lain atau kembali ke semua berita.</p>
    </div>
    @else
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
        @foreach($beritas as $berita)
        <article class="group bg-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
            <div class="relative h-64 overflow-hidden">
                @if($berita->gambar_berita)
                <img src="{{ Storage::url($berita->gambar_berita) }}" 
                     alt="{{ $berita->title }}" 
                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                @else
                <div class="w-full h-full bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center">
                    <svg class="w-32 h-32 text-white opacity-40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                    </svg>
                </div>
                @endif
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            </div>

            <div class="p-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-4 line-clamp-3 group-hover:text-blue-600 transition-colors">
                    {{ $berita->title }}
                </h2>

                <div class="mt-6 pt-6 border-t-2 border-gray-100">
                    <a href="{{ route('berita.show', $berita->slug) }}" 
                       class="inline-flex items-center gap-3 text-blue-600 font-bold text-lg hover:text-blue-800 transition-colors">
                        <span>Baca Selengkapnya</span>
                        <svg class="w-6 h-6 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </article>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-16 flex justify-center">
        {{ $beritas->links('pagination::tailwind') }}
    </div>
    @endif
</div>


@endsection