@extends('layouts.app')

@section('title', 'Program - Cakrawala Muda Indonesia')

@section('content')
<div class="relative bg-blue-600 text-white py-20 overflow-hidden">
  <div class="absolute inset-0 opacity-10">
    <div class="absolute top-10 right-10 w-72 h-72 bg-white rounded-full blur-3xl animate-float"></div>
    <div class="absolute bottom-10 left-10 w-96 h-96 bg-blue-300 rounded-full blur-3xl animate-float" style="animation-delay: 1s;"></div>
  </div>
  <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
    <div class="inline-flex items-center gap-2 px-6 py-2 bg-white/10 backdrop-blur-lg rounded-full text-sm font-semibold border border-white/20 mb-4">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
      </svg>
      <span>Jelajahi Program Kami</span>
    </div>
    <h1 class="text-5xl md:text-6xl font-bold mb-4">
      Program <span class="text-white">Unggulan</span>
    </h1>
    <p class="text-xl md:text-2xl text-blue-100 max-w-2xl mx-auto">Temukan program yang sesuai dengan minat & passionmu 🚀</p>
  </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
  <!-- Filter -->
  <div class="mb-12 flex flex-wrap gap-4 justify-center">
    <a href="{{ route('programs.index') }}" class="group inline-flex items-center gap-2 px-8 py-3 rounded-2xl font-bold {{ !request('jenis') ? 'bg-blue-600 text-white shadow-lg scale-105' : 'bg-white text-gray-700 hover:bg-gray-50 shadow-md hover:shadow-lg' }} transition-all duration-300 hover:scale-105">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
      </svg>
      <span>Semua</span>
    </a>
    <a href="{{ route('programs.index', ['jenis' => 'Travel & Ekspedisi']) }}" class="group inline-flex items-center gap-2 px-8 py-3 rounded-2xl font-bold {{ request('jenis') == 'Travel & Ekspedisi' ? 'bg-blue-600 text-white shadow-lg scale-105' : 'bg-white text-gray-700 hover:bg-gray-50 shadow-md hover:shadow-lg' }} transition-all duration-300 hover:scale-105">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
      <span>Travel & Ekspedisi</span>
    </a>
    <a href="{{ route('programs.index', ['jenis' => 'Volunteering']) }}" class="group inline-flex items-center gap-2 px-8 py-3 rounded-2xl font-bold {{ request('jenis') == 'Volunteering' ? 'bg-blue-600 text-white shadow-lg scale-105' : 'bg-white text-gray-700 hover:bg-gray-50 shadow-md hover:shadow-lg' }} transition-all duration-300 hover:scale-105">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
      </svg>
      <span>Volunteering</span>
    </a>
    <a href="{{ route('programs.index', ['jenis' => 'Leadership & Education']) }}" class="group inline-flex items-center gap-2 px-8 py-3 rounded-2xl font-bold {{ request('jenis') == 'Leadership & Education' ? 'bg-blue-600 text-white shadow-lg scale-105' : 'bg-white text-gray-700 hover:bg-gray-50 shadow-md hover:shadow-lg' }} transition-all duration-300 hover:scale-105">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
      </svg>
      <span>Leadership</span>
    </a>
  </div>

  <!-- Programs Grid -->
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
        <p class="text-gray-600 mb-4 line-clamp-3 leading-relaxed">{{ strip_tags(Str::limit($program->keterangan, 120)) }}</p>

        <div class="space-y-2 mb-4">
          @if($program->lokasi)
          <div class="flex items-center gap-2 text-gray-600">
            <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <span class="font-medium">{{ $program->lokasi }}</span>
          </div>
          @endif
          <div class="flex items-center gap-2 text-gray-600">
            <svg class="w-5 h-5 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <span class="font-medium">{{ \Carbon\Carbon::parse($program->tanggal_mulai)->format('d M Y') }} - {{ \Carbon\Carbon::parse($program->tanggal_selesai)->format('d M Y') }}</span>
          </div>
        </div>

        <div class="pt-4 border-t border-gray-100">
          <a href="{{ route('programs.show', $program->slug) }}" class="group/btn inline-flex items-center gap-2 bg-blue-600 text-white px-6 py-3 rounded-xl font-bold hover:shadow-lg hover:scale-105 hover:bg-blue-700 transition-all duration-300 w-full justify-center">
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
      <p class="text-gray-600 text-lg">Tidak ada program yang ditemukan</p>
      <a href="{{ route('programs.index') }}" class="text-blue-600 font-semibold hover:text-blue-700 mt-4 inline-block">
        Lihat Semua Program
      </a>
    </div>
    @endforelse
  </div>

  <!-- Pagination -->
  <div class="mt-12">
    {{ $programs->links() }}
  </div>
</div>
@endsection