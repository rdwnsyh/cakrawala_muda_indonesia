@extends('layouts.app')

@section('title', 'Berita - Cakrawala Muda Indonesia')

@section('content')
<!-- Hero Section -->
<div class="relative bg-blue-600 text-white py-20 overflow-hidden">
  <div class="absolute inset-0 opacity-10">
    <div class="absolute top-10 right-10 w-72 h-72 bg-white rounded-full blur-3xl animate-float"></div>
    <div class="absolute bottom-10 left-10 w-96 h-96 bg-blue-300 rounded-full blur-3xl animate-float" style="animation-delay: 1s;"></div>
  </div>
  <div class="relative container mx-auto px-4 text-center space-y-4">
    <div class="inline-flex items-center gap-2 px-6 py-2 bg-white/10 backdrop-blur-lg rounded-full text-sm font-semibold border border-white/20 mb-4">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
      </svg>
      <span>Berita & Artikel</span>
    </div>
    <h1 class="text-5xl md:text-6xl font-bold mb-4">
      Berita <span class="text-white">Terkini</span>
    </h1>
    <p class="text-xl md:text-2xl text-blue-100 max-w-2xl mx-auto">Informasi terbaru seputar program dan kegiatan kami 📰</p>
  </div>
</div>

<!-- Filter & Search Section -->
<div class="bg-white/80 backdrop-blur-lg shadow-lg py-8 sticky top-0 z-10">
  <div class="container mx-auto px-4">
    <form method="GET" action="{{ route('berita.index') }}" class="flex flex-col md:flex-row gap-4">
      <div class="flex-1 relative">
        <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
        <input
          type="text"
          name="search"
          value="{{ request('search') }}"
          placeholder="Cari berita..."
          class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 rounded-2xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all">
      </div>

      <button
        type="submit"
        class="inline-flex items-center justify-center gap-2 px-8 py-3 bg-blue-600 text-white rounded-2xl font-bold hover:shadow-lg hover:scale-105 hover:bg-blue-700 transition-all duration-300">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
        <span>Cari</span>
      </button>
      @if(request('search'))
      <a
        href="{{ route('berita.index') }}"
        class="inline-flex items-center justify-center gap-2 px-8 py-3 bg-gray-200 text-gray-700 rounded-2xl font-bold hover:bg-gray-300 hover:scale-105 transition-all duration-300 text-center">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
        <span>Reset</span>
      </a>
      @endif
    </form>
  </div>
</div>

<!-- News Grid -->
<div class="container mx-auto px-4 py-12">
  @if($beritas->isEmpty())
  <div class="text-center py-12">
    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
    </svg>
    <h3 class="mt-2 text-lg font-medium text-gray-900">Tidak ada berita</h3>
    <p class="mt-1 text-gray-500">Belum ada berita yang dipublikasikan.</p>
  </div>
  @else
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    @foreach($beritas as $berita)
    <article class="group bg-white rounded-2xl shadow-lg overflow-hidden card-hover transition-all duration-300">
      <div class="relative h-56 overflow-hidden">
        @if($berita->gambar_berita)
        <img
          src="{{ Storage::url($berita->gambar_berita) }}"
          alt="{{ $berita->title }}"
          class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
        @else
        <div class="w-full h-full bg-blue-600 flex items-center justify-center">
          <svg class="w-24 h-24 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
          </svg>
        </div>
        @endif
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
      </div>

      <div class="p-6">
        <h2 class="text-xl font-bold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors line-clamp-2">
          {{ $berita->title }}
        </h2>

        <div class="pt-4 border-t border-gray-100">
          <a
            href="{{ $berita->link }}"
            target="_blank"
            rel="noopener noreferrer"
            class="group/btn inline-flex items-center gap-2 text-blue-600 font-bold hover:text-blue-700 transition-colors">
            <span>Baca Selengkapnya</span>
            <svg class="w-5 h-5 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
            </svg>
          </a>
        </div>
      </div>
    </article>
    @endforeach
  </div>

  <!-- Pagination -->
  <div class="mt-12">
    {{ $beritas->links() }}
  </div>
  @endif
</div>
@endsection