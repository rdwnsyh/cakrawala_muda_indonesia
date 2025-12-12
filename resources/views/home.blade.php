@extends('layouts.app')

@section('title', 'Home - Cakrawala Muda Indonesia')

@section('content')
<!-- Hero Section -->
<div class="relative bg-blue-600 text-white overflow-hidden">
  <!-- Animated Background Elements -->
  <div class="absolute inset-0 opacity-20">
    <div class="absolute top-10 left-10 w-72 h-72 bg-white rounded-full blur-3xl animate-float"></div>
    <div class="absolute bottom-10 right-10 w-96 h-96 bg-blue-300 rounded-full blur-3xl animate-float" style="animation-delay: 1s;"></div>
  </div>

  <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32">
    <div class="text-center space-y-8">
      <!-- Badge -->
      <div class="animate-fadeInUp">
        <span class="inline-flex items-center gap-2 px-6 py-3 bg-white/10 backdrop-blur-lg rounded-full text-sm font-semibold border border-white/20">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
          </svg>
          Platform Terpercaya #1 di Indonesia
        </span>
      </div>

      <!-- Main Heading -->
      <h1 class="text-5xl md:text-7xl font-bold leading-tight animate-fadeInUp" style="animation-delay: 0.2s;">
        Jelajahi Indonesia<br />
        <span class="text-white">Bersama Kami</span>
      </h1>

      <p class="text-xl md:text-2xl text-blue-100 max-w-3xl mx-auto leading-relaxed animate-fadeInUp" style="animation-delay: 0.4s;">
        Platform untuk generasi penjelajah & pemimpin masa depan Indonesia 🇮🇩
      </p>

      <!-- CTA Buttons -->
      <div class="flex flex-col sm:flex-row justify-center gap-4 pt-4 animate-fadeInUp" style="animation-delay: 0.6s;">
        <a href="{{ route('programs.index') }}" class="group relative inline-flex items-center justify-center gap-2 bg-white text-blue-600 px-8 py-4 rounded-2xl font-bold text-lg hover:shadow-2xl hover:scale-105 transition-all duration-300">
          <svg class="w-6 h-6 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
          </svg>
          Lihat Program
        </a>
        <a href="#about" class="group inline-flex items-center justify-center gap-2 bg-white/10 backdrop-blur-lg border-2 border-white/30 text-white px-8 py-4 rounded-2xl font-bold text-lg hover:bg-white hover:text-blue-600 hover:scale-105 transition-all duration-300">
          <svg class="w-6 h-6 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          Tentang Kami
        </a>
      </div>

      <!-- Features -->
      <div class="flex flex-wrap justify-center gap-6 pt-8 animate-fadeInUp" style="animation-delay: 0.8s;">
        <div class="flex items-center gap-2 text-blue-100">
          <svg class="w-5 h-5 text-green-300" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
          </svg>
          <span class="font-semibold">Terpercaya</span>
        </div>
        <div class="flex items-center gap-2 text-blue-100">
          <svg class="w-5 h-5 text-green-300" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
          </svg>
          <span class="font-semibold">Berpengalaman</span>
        </div>
        <div class="flex items-center gap-2 text-blue-100">
          <svg class="w-5 h-5 text-green-300" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
          </svg>
          <span class="font-semibold">Profesional</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Wave Bottom -->
  <div class="absolute bottom-0 left-0 right-0">
    <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 120L60 110C120 100 240 80 360 70C480 60 600 60 720 65C840 70 960 80 1080 85C1200 90 1320 90 1380 90L1440 90V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="white" />
    </svg>
  </div>
</div>

<!-- Stats Section -->
<div class="bg-white py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="group text-center p-8 rounded-2xl hover:bg-blue-50 transition-all duration-300 hover:shadow-xl animate-scaleIn">
        <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-lg">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
          </svg>
        </div>
        <div class="text-5xl font-bold text-blue-600 mb-2">500+</div>
        <div class="text-gray-600 font-semibold">Alumni</div>
      </div>
      <div class="group text-center p-8 rounded-2xl hover:bg-blue-50 transition-all duration-300 hover:shadow-xl animate-scaleIn" style="animation-delay: 0.2s;">
        <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-lg">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
        </div>
        <div class="text-5xl font-bold text-blue-600 mb-2">25+</div>
        <div class="text-gray-600 font-semibold">Provinsi Terjangkau</div>
      </div>
      <div class="group text-center p-8 rounded-2xl hover:bg-blue-50 transition-all duration-300 hover:shadow-xl animate-scaleIn" style="animation-delay: 0.4s;">
        <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-lg">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
          </svg>
        </div>
        <div class="text-5xl font-bold text-blue-600 mb-2">{{ $programs->count() }}+</div>
        <div class="text-gray-600 font-semibold">Program Aktif</div>
      </div>
    </div>
  </div>
</div>

<!-- Programs Section -->
<div class="py-16 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
      <h2 class="text-4xl font-bold text-gray-900 mb-4">Program Unggulan</h2>
      <p class="text-xl text-gray-600">Temukan pengalaman tak terlupakan bersama kami</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      @forelse($programs as $program)
      <div class="group bg-white rounded-2xl shadow-lg overflow-hidden card-hover transition-all duration-300">
        <div class="relative overflow-hidden">
          <img src="{{ asset('storage/' . $program->poster) }}" alt="{{ $program->nama_program }}" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="absolute top-4 right-4">
            <span class="px-3 py-1.5 {{ $program->status === 'aktif' ? 'bg-green-500' : ($program->status === 'segera' ? 'bg-yellow-500' : 'bg-red-500') }} text-white text-sm font-bold rounded-full shadow-lg backdrop-blur-sm">
              {{ $program->status === 'aktif' ? '✓ Buka' : ($program->status === 'segera' ? '⏰ Segera' : '✕ Tutup') }}
            </span>
          </div>
        </div>
        <div class="p-6">
          <div class="flex items-center gap-2 mb-3">
            <span class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-blue-600 text-white text-sm font-bold rounded-xl shadow-md">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              {{ $program->jenis_program }}
            </span>
          </div>
          <h3 class="text-xl font-bold mb-3 text-gray-900 group-hover:text-blue-600 transition-colors">{{ $program->nama_program }}</h3>
          <div class="space-y-2 mb-4">
            <p class="text-gray-600 flex items-center gap-2">
              <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
              <span class="font-medium">{{ $program->lokasi ?? 'Lokasi belum ditentukan' }}</span>
            </p>
            <p class="text-gray-600 flex items-center gap-2">
              <svg class="w-5 h-5 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
              </svg>
              <span class="font-medium">{{ \Carbon\Carbon::parse($program->tanggal_mulai)->format('d M Y') }} - {{ \Carbon\Carbon::parse($program->tanggal_selesai)->format('d M Y') }}</span>
            </p>
          </div>
          <div class="pt-4 border-t border-gray-100">
            <a href="{{ route('programs.show', $program->slug) }}" class="group/btn inline-flex items-center gap-2 text-blue-600 font-bold hover:text-blue-700 transition-colors">
              <span>Lihat Detail</span>
              <svg class="w-5 h-5 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
              </svg>
            </a>
          </div>
        </div>
      </div>
      @empty
      <div class="col-span-3 text-center py-12">
        <p class="text-gray-600">Belum ada program tersedia</p>
      </div>
      @endforelse
    </div>

    <div class="text-center mt-12">
      <a href="{{ route('programs.index') }}" class="group inline-flex items-center gap-2 bg-blue-600 text-white px-10 py-4 rounded-2xl font-bold text-lg hover:shadow-2xl hover:scale-105 hover:bg-blue-700 transition-all duration-300">
        <span>Lihat Semua Program</span>
        <svg class="w-6 h-6 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
        </svg>
      </a>
    </div>
  </div>
</div>

<!-- News Section -->
@if($beritas->count() > 0)
<div class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
      <h2 class="text-4xl font-bold text-gray-900 mb-4">Berita Terbaru</h2>
      <p class="text-xl text-gray-600">Update terkini seputar program dan kegiatan kami</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      @foreach($beritas as $berita)
      <article class="group bg-white rounded-2xl shadow-lg overflow-hidden card-hover transition-all duration-300">
        <div class="relative h-56 overflow-hidden">
          @if($berita->gambar_berita)
          <img src="{{ asset('storage/' . $berita->gambar_berita) }}" alt="{{ $berita->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
          @else
          <div class="w-full h-full bg-blue-500"></div>
          @endif
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold mb-4 text-gray-900 group-hover:text-blue-600 transition-colors line-clamp-2">
            {{ $berita->title }}
          </h3>
          <div class="pt-4 border-t border-gray-100">
            <a href="{{ $berita->link }}" target="_blank" rel="noopener noreferrer" class="group/btn inline-flex items-center gap-2 text-blue-600 font-bold hover:text-blue-700 transition-colors">
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

    <div class="text-center mt-12">
      <a href="{{ route('berita.index') }}" class="group inline-flex items-center gap-2 bg-blue-600 text-white px-10 py-4 rounded-2xl font-bold text-lg hover:shadow-2xl hover:scale-105 hover:bg-blue-700 transition-all duration-300">
        <span>Lihat Semua Berita</span>
        <svg class="w-6 h-6 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
        </svg>
      </a>
    </div>
  </div>
</div>
@endif

<!-- Testimonials Section -->
@if($testimonials->count() > 0)
<div id="testimonials" class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
      <h2 class="text-4xl font-bold text-gray-900 mb-4">Testimoni Alumni</h2>
      <p class="text-xl text-gray-600">Apa kata mereka tentang kami</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      @foreach($testimonials as $testimonial)
      <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
        <div class="flex items-center mb-4">
          @if($testimonial->avatar)
          <img src="{{ asset('storage/' . $testimonial->avatar) }}" alt="{{ $testimonial->name }}" class="w-12 h-12 rounded-full mr-4">
          @else
          <div class="w-12 h-12 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold mr-4">
            {{ substr($testimonial->name, 0, 1) }}
          </div>
          @endif
          <div>
            <h4 class="font-bold text-gray-900">{{ $testimonial->name }}</h4>
            <p class="text-sm text-gray-600">{{ $testimonial->role }}</p>
          </div>
        </div>
        <p class="text-gray-700 italic">"{{ $testimonial->content }}"</p>
        <div class="mt-4 text-yellow-500">
          @for($i = 0; $i < $testimonial->rating; $i++)
            ★
            @endfor
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endif

<!-- CTA Section -->
<div class="bg-gradient-to-r from-green-600 to-green-800 text-white py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <h2 class="text-4xl font-bold mb-4">Siap Memulai Petualangan?</h2>
    <p class="text-xl mb-8 text-green-100">Bergabunglah dengan ratusan pemuda Indonesia lainnya</p>
    <a href="{{ route('programs.index') }}" class="bg-white text-green-600 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition inline-block">
      Daftar Sekarang
    </a>
  </div>
</div>
@endsection