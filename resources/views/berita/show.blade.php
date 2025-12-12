@extends('layouts.app')

@section('title', $berita->title . ' - Cakrawala Muda Indonesia')

@section('content')
<!-- Breadcrumb -->
<div class="bg-gray-100 py-4">
  <div class="container mx-auto px-4">
    <nav class="flex" aria-label="Breadcrumb">
      <ol class="inline-flex items-center space-x-1 md:space-x-3">
        <li class="inline-flex items-center">
          <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600">
            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
            </svg>
            Home
          </a>
        </li>
        <li>
          <div class="flex items-center">
            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
            </svg>
            <a href="{{ route('berita.index') }}" class="ml-1 text-gray-700 hover:text-blue-600 md:ml-2">Berita</a>
          </div>
        </li>
        <li aria-current="page">
          <div class="flex items-center">
            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
            </svg>
            <span class="ml-1 text-gray-500 md:ml-2 truncate max-w-xs">{{ Str::limit($berita->title, 40) }}</span>
          </div>
        </li>
      </ol>
    </nav>
  </div>
</div>

<!-- Article Content -->
<article class="container mx-auto px-4 py-12">
  <div class="max-w-4xl mx-auto">
    <!-- Header -->
    <header class="mb-8">
      <div class="mb-4">
        <span class="inline-block px-4 py-1 bg-blue-600 text-white text-sm font-semibold rounded-full">
          {{ $berita->kategori_berita }}
        </span>
      </div>

      <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
        {{ $berita->title }}
      </h1>

      <div class="flex flex-wrap items-center gap-4 text-gray-600 border-b border-gray-200 pb-6">
        <div class="flex items-center gap-2">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
          </svg>
          <span class="font-medium">{{ $berita->penulis }}</span>
        </div>
        <div class="flex items-center gap-2">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
          </svg>
          <span>{{ \Carbon\Carbon::parse($berita->tanggal)->format('d F Y') }}</span>
        </div>
        <div class="flex items-center gap-2">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <span>{{ ceil(str_word_count(strip_tags($berita->body)) / 200) }} menit baca</span>
        </div>
      </div>
    </header>

    <!-- Featured Image -->
    @if($berita->gambar_berita)
    <div class="mb-10 rounded-xl overflow-hidden shadow-lg">
      <img
        src="{{ Storage::url($berita->gambar_berita) }}"
        alt="{{ $berita->title }}"
        class="w-full h-auto">
    </div>
    @endif

    <!-- Article Body -->
    <div class="prose prose-lg max-w-none mb-12">
      {!! $berita->body !!}
    </div>

    <!-- Share Buttons -->
    <div class="border-t border-b border-gray-200 py-6 mb-12">
      <div class="flex items-center gap-4">
        <span class="font-semibold text-gray-700">Bagikan:</span>
        <a
          href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('berita.show', $berita->slug)) }}"
          target="_blank"
          class="flex items-center gap-2 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
          </svg>
          Facebook
        </a>
        <a
          href="https://twitter.com/intent/tweet?url={{ urlencode(route('berita.show', $berita->slug)) }}&text={{ urlencode($berita->title) }}"
          target="_blank"
          class="flex items-center gap-2 px-4 py-2 bg-sky-500 text-white rounded-lg hover:bg-sky-600 transition-colors">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
          </svg>
          Twitter
        </a>
        <a
          href="https://wa.me/?text={{ urlencode($berita->title . ' - ' . route('berita.show', $berita->slug)) }}"
          target="_blank"
          class="flex items-center gap-2 px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
          </svg>
          WhatsApp
        </a>
      </div>
    </div>

    <!-- Related News -->
    @if($relatedBeritas->count() > 0)
    <div class="mt-16">
      <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-8">Berita Terkait</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach($relatedBeritas as $related)
        <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
          <a href="{{ route('berita.show', $related->slug) }}">
            <div class="relative h-40 overflow-hidden">
              @if($related->gambar_berita)
              <img
                src="{{ Storage::url($related->gambar_berita) }}"
                alt="{{ $related->title }}"
                class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
              @else
              <div class="w-full h-full bg-gradient-to-br from-blue-400 to-purple-500"></div>
              @endif
            </div>
          </a>
          <div class="p-4">
            <span class="text-xs text-blue-600 font-semibold">{{ $related->kategori_berita }}</span>
            <a href="{{ route('berita.show', $related->slug) }}">
              <h3 class="text-lg font-bold text-gray-900 mt-2 mb-2 hover:text-blue-600 line-clamp-2">
                {{ $related->title }}
              </h3>
            </a>
            <p class="text-sm text-gray-600">
              {{ \Carbon\Carbon::parse($related->tanggal)->format('d M Y') }}
            </p>
          </div>
        </article>
        @endforeach
      </div>
    </div>
    @endif
  </div>
</article>
@endsection