@extends('layouts.app')

@section('title', $program->nama_program . ' - Cakrawala Muda Indonesia')

@section('content')
<!-- Hero Section dengan Poster Besar & Overlay -->
<div class="relative h-screen max-h-screen overflow-hidden">
    <img src="{{ asset('storage/' . $program->poster) }}" 
         alt="{{ $program->nama_program }}" 
         class="absolute inset-0 w-full h-full object-cover">

    <!-- Overlay Gelap -->
    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/70 to-transparent"></div>

    <!-- Konten Hero -->
    <div class="relative h-full flex flex-col justify-end pb-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
        <div class="text-center text-white">
            <!-- Badge Jenis Program -->
            <span class="inline-block px-6 py-3 bg-white/20 backdrop-blur-md rounded-full text-lg font-semibold mb-6">
                {{ $program->jenis_program }}
            </span>

            <!-- Judul Program -->
            <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">
                {{ $program->nama_program }}
            </h1>

            <!-- Lokasi & Tanggal -->
            <div class="flex flex-col md:flex-row items-center justify-center gap-6 text-xl mb-8">
                @if($program->lokasi)
                <div class="flex items-center gap-3">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span>{{ $program->lokasi }}</span>
                </div>
                @endif

                <div class="flex items-center gap-3">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span>
                        {{ \Carbon\Carbon::parse($program->tanggal_mulai)->format('d F Y') }}
                        @if($program->tanggal_selesai)
                        - {{ \Carbon\Carbon::parse($program->tanggal_selesai)->format('d F Y') }}
                        @endif
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Content: Poster di Kiri + Keterangan di Kanan -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
        <!-- Poster Program di Sebelah Kiri -->
        <div class="lg:col-span-1">
            <div class="sticky top-8">
                <img src="{{ asset('storage/' . $program->poster) }}" 
                     alt="{{ $program->nama_program }}" 
                     class="w-full rounded-3xl shadow-2xl object-cover">
            </div>
        </div>

        <!-- Keterangan Program + Info di Sebelah Kanan -->
        <div class="lg:col-span-2 space-y-12">
            <!-- Keterangan Program -->
            <div class="bg-white rounded-3xl shadow-xl p-10">
                <h2 class="text-3xl font-bold mb-8 text-gray-900">Tentang Program Ini</h2>
                <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                    {!! $program->keterangan !!}
                </div>
            </div>

            <!-- Informasi Program + Apa yang Didapatkan -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Card Informasi Program -->
                <div class="bg-white rounded-3xl shadow-xl p-8">
                    <h3 class="text-2xl font-bold mb-6 text-gray-900">Informasi Program</h3>
                    <div class="space-y-6">
                        <div>
                            <div class="text-sm text-gray-500 uppercase font-semibold mb-1">Jenis</div>
                            <div class="text-lg font-medium text-gray-900">{{ $program->jenis_program }}</div>
                        </div>

                        @if($program->lokasi)
                        <div>
                            <div class="text-sm text-gray-500 uppercase font-semibold mb-1">Lokasi</div>
                            <div class="text-lg font-medium text-gray-900">{{ $program->lokasi }}</div>
                        </div>
                        @endif

                        <div>
                            <div class="text-sm text-gray-500 uppercase font-semibold mb-1">Tanggal</div>
                            <div class="text-lg font-medium text-gray-900">
                                {{ \Carbon\Carbon::parse($program->tanggal_mulai)->format('d F Y') }}
                                @if($program->tanggal_selesai)
                                <br>s/d {{ \Carbon\Carbon::parse($program->tanggal_selesai)->format('d F Y') }}
                                @endif
                            </div>
                        </div>

                        <div>
                            <div class="text-sm text-gray-500 uppercase font-semibold mb-1">Status</div>
                            <span class="inline-block px-4 py-2 rounded-full text-white font-semibold {{ $program->status === 'aktif' ? 'bg-green-500' : ($program->status === 'segera' ? 'bg-yellow-500' : 'bg-red-500') }}">
                                {{ $program->status === 'aktif' ? 'Pendaftaran Dibuka' : ($program->status === 'segera' ? 'Segera Dibuka' : 'Ditutup') }}
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Apa yang Kamu Dapatkan? + Tombol di Bawah -->
                <div class="bg-gradient-to-br from-blue-50 to-indigo-100 rounded-3xl shadow-xl p-8 flex flex-col">
                    <h3 class="text-2xl font-bold mb-6 text-gray-900">Apa yang Kamu Dapatkan?</h3>
                    <ul class="space-y-4 text-gray-700 flex-1">
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span>Pengalaman volunteering langsung di masyarakat</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span>Sertifikat resmi dari Cakrawala Muda Indonesia</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span>Jaringan dengan pemuda dari seluruh Indonesia</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span>Penginapan & makan selama program</span>
                        </li>
                    </ul>

                    <div class="mt-5 flex flex-col sm:flex-row gap-4">
                      @if($program->status === 'aktif')
                        <!-- Buku Panduan Pendaftaran -->
                        <a href="{{ asset('path/to/buku-panduan.pdf') }}" 
                           target="_blank"
                           class="flex-1 bg-indigo-600 hover:bg-indigo-700 text-white text-center py-4 rounded-full font-bold transition shadow-lg flex items-center justify-center gap-3">
                            Buku Panduan
                        </a>

                        <!-- Link Pendaftaran -->
                        <a href="https://forms.gle/contohlinkpendaftaran" 
                           target="_blank"
                           class="flex-1 bg-blue-600 hover:bg-blue-700 text-white text-center text-sm rounded-full font-bold transition shadow-lg flex items-center justify-center">
                            Link Pendaftaran
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection