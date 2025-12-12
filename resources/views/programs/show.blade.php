@extends('layouts.app')

@section('title', $program->nama_program . ' - Cakrawala Muda Indonesia')

@section('content')
<!-- Hero Image -->
<div class="relative h-96">
  <img src="{{ asset('storage/' . $program->poster) }}" alt="{{ $program->nama_program }}" class="w-full h-full object-cover">
  <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
    <div class="text-center text-white px-4">
      <h1 class="text-4xl md:text-5xl font-bold mb-4">{{ $program->nama_program }}</h1>
      <div class="flex items-center justify-center gap-4">
        <span class="px-4 py-2 bg-white text-blue-600 rounded-full font-semibold">
          {{ $program->jenis_program }}
        </span>
        <span class="px-4 py-2 {{ $program->status === 'aktif' ? 'bg-green-500' : ($program->status === 'segera' ? 'bg-yellow-500' : 'bg-red-500') }} text-white rounded-full font-semibold">
          {{ $program->status === 'aktif' ? 'Buka' : ($program->status === 'segera' ? 'Segera' : 'Tutup') }}
        </span>
      </div>
    </div>
  </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
  <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    <!-- Main Content -->
    <div class="lg:col-span-2">
      <!-- Program Info -->
      <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
        <h2 class="text-2xl font-bold mb-6 text-gray-900">Keterangan Program</h2>
        <div class="prose prose-lg max-w-none">
          {!! $program->keterangan !!}
        </div>
      </div>
    </div>

    <!-- Sidebar -->
    <div class="lg:col-span-1">
      <!-- Info Card -->
      <div class="bg-white rounded-xl shadow-lg p-8 sticky top-20">
        <h3 class="text-xl font-bold mb-6 text-gray-900">Detail Program</h3>

        <!-- Program Details -->
        <div class="space-y-4 mb-6">
          <div class="flex items-start">
            <svg class="w-6 h-6 text-blue-600 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
            </svg>
            <div>
              <div class="font-semibold text-gray-900">Jenis Program</div>
              <div class="text-gray-600">{{ $program->jenis_program }}</div>
            </div>
          </div>

          @if($program->lokasi)
          <div class="flex items-start">
            <svg class="w-6 h-6 text-blue-600 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <div>
              <div class="font-semibold text-gray-900">Lokasi</div>
              <div class="text-gray-600">{{ $program->lokasi }}</div>
            </div>
          </div>
          @endif

          <div class="flex items-start">
            <svg class="w-6 h-6 text-blue-600 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <div>
              <div class="font-semibold text-gray-900">Tanggal Program</div>
              <div class="text-gray-600">{{ \Carbon\Carbon::parse($program->tanggal_mulai)->format('d F Y') }}</div>
              <div class="text-gray-600">s/d {{ \Carbon\Carbon::parse($program->tanggal_selesai)->format('d F Y') }}</div>
            </div>
          </div>

          <div class="flex items-start">
            <svg class="w-6 h-6 text-blue-600 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <div>
              <div class="font-semibold text-gray-900">Status</div>
              <span class="inline-block px-3 py-1 {{ $program->status === 'aktif' ? 'bg-green-100 text-green-600' : ($program->status === 'segera' ? 'bg-yellow-100 text-yellow-600' : 'bg-red-100 text-red-600') }} text-sm font-semibold rounded-full">
                {{ $program->status === 'aktif' ? 'Buka' : ($program->status === 'segera' ? 'Segera' : 'Tutup') }}
              </span>
            </div>
          </div>
        </div>

        @if($program->status === 'aktif')
        <a href="https://wa.me/6281234567890?text=Halo, saya tertarik dengan program {{ $program->nama_program }}"
          target="_blank"
          class="block w-full bg-green-600 text-white text-center px-6 py-4 rounded-lg font-semibold hover:bg-green-700 transition">
          📱 Daftar via WhatsApp
        </a>
        <p class="text-sm text-gray-600 text-center mt-4">
          Atau hubungi kami untuk informasi lebih lanjut
        </p>
        @elseif($program->status === 'segera')
        <button disabled class="block w-full bg-yellow-400 text-gray-900 text-center px-6 py-4 rounded-lg font-semibold cursor-not-allowed">
          Pendaftaran Segera Dibuka
        </button>
        @else
        <button disabled class="block w-full bg-gray-400 text-white text-center px-6 py-4 rounded-lg font-semibold cursor-not-allowed">
          Pendaftaran Ditutup
        </button>
        @endif
      </div>
    </div>
  </div>
</div>

<!-- Share Section -->
<div class="bg-gray-50 py-12">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <h3 class="text-2xl font-bold mb-4">Bagikan Program Ini</h3>
    <div class="flex justify-center gap-4">
      <a href="https://wa.me/?text=Lihat program menarik ini: {{ $program->nama_program }} - {{ route('programs.show', $program->slug) }}"
        target="_blank"
        class="bg-green-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-green-600 transition">
        WhatsApp
      </a>
      <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('programs.show', $program->slug) }}"
        target="_blank"
        class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
        Facebook
      </a>
    </div>
  </div>
</div>
@endsection