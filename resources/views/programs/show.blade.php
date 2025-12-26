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
                {{ $program->jenisProgram->nama ?? 'Program' }}
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
            <div class="sticky top-8 self-start">
                <img src="{{ asset('storage/' . $program->poster) }}"
                    alt="{{ $program->nama_program }}"
                    class="w-full rounded-3xl shadow-2xl object-cover max-h-[calc(100vh-4rem)]">
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

            <!-- Galeri Foto Program -->
            @if($program->galeri_1 || $program->galeri_2 || $program->galeri_3)
            <div class="bg-white rounded-3xl shadow-xl p-10">
                <h2 class="text-3xl font-bold mb-8 text-gray-900">Galeri Foto</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @if($program->galeri_1)
                    <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 cursor-pointer"
                        onclick="openModal('{{ asset('storage/' . $program->galeri_1) }}')">
                        <img src="{{ asset('storage/' . $program->galeri_1) }}"
                            alt="Galeri {{ $program->nama_program }} 1"
                            class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <span class="text-white font-bold text-lg">Lihat Foto</span>
                        </div>
                    </div>
                    @endif

                    @if($program->galeri_2)
                    <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 cursor-pointer"
                        onclick="openModal('{{ asset('storage/' . $program->galeri_2) }}')">
                        <img src="{{ asset('storage/' . $program->galeri_2) }}"
                            alt="Galeri {{ $program->nama_program }} 2"
                            class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <span class="text-white font-bold text-lg">Lihat Foto</span>
                        </div>
                    </div>
                    @endif

                    @if($program->galeri_3)
                    <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 cursor-pointer"
                        onclick="openModal('{{ asset('storage/' . $program->galeri_3) }}')">
                        <img src="{{ asset('storage/' . $program->galeri_3) }}"
                            alt="Galeri {{ $program->nama_program }} 3"
                            class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <span class="text-white font-bold text-lg">Lihat Foto</span>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            @endif

            <!-- Informasi Program -->
            <div class="bg-white rounded-3xl shadow-xl p-10">
                <h3 class="text-2xl font-bold mb-6 text-gray-900">Informasi Program</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <div class="text-sm text-gray-500 uppercase font-semibold mb-1">Jenis</div>
                        <div class="text-lg font-medium text-gray-900">{{ $program->jenisProgram->nama ?? 'Program' }}</div>
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

                @if($program->status === 'aktif')
                <div class="mt-8 pt-8 border-t border-gray-200">
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <!-- Buku Panduan Pendaftaran -->
                        @if($program->link_buku_panduan)
                        <a href="{{ $program->link_buku_panduan }}"
                            target="_blank"
                            class="flex-1 max-w-xs bg-indigo-600 hover:bg-indigo-700 text-white text-center py-4 rounded-xl font-bold transition shadow-lg flex items-center justify-center gap-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                            Buku Panduan
                        </a>
                        @endif

                        <!-- Link Pendaftaran -->
                        @if($program->link_daftar_sekarang)
                        <a href="{{ $program->link_daftar_sekarang }}"
                            target="_blank"
                            class="flex-1 max-w-xs bg-blue-600 hover:bg-blue-700 text-white text-center py-4 rounded-xl font-bold transition shadow-lg flex items-center justify-center gap-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                            Daftar Sekarang
                        </a>
                        @endif
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Modal untuk Lihat Foto Full -->
<div id="photoModal" class="hidden fixed inset-0 bg-black/90 z-50 flex items-center justify-center p-4" onclick="closeModal()">
    <button onclick="closeModal()" class="absolute top-4 right-4 text-white hover:text-gray-300 transition">
        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>
    <img id="modalImage" src="" alt="Full Photo" class="max-w-full max-h-full object-contain" onclick="event.stopPropagation()">
</div>

<script>
    function openModal(imageSrc) {
        document.getElementById('photoModal').classList.remove('hidden');
        document.getElementById('modalImage').src = imageSrc;
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        document.getElementById('photoModal').classList.add('hidden');
        document.body.style.overflow = 'auto';
    }

    // Close modal dengan ESC key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeModal();
        }
    });
</script>

@endsection