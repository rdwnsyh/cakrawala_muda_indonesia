@extends('layouts.app')

@section('title', 'Program - Cakrawala Muda Indonesia')

@section('content')
<!-- Hero Section -->
<div class="relative h-96 md:h-screen max-h-screen overflow-hidden bg-gray-50">
    <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?ixlib=rb-4.0.3&auto=format&fit=crop&q=80&w=1950" 
         alt="Pemuda Indonesia dalam program Cakrawala Muda" 
         class="absolute inset-0 w-full h-full object-cover">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/70 to-transparent"></div>

    <!-- Konten Hero -->
    <div class="relative h-full flex flex-col justify-center items-center px-4 sm:px-6 lg:px-8 text-center text-white">
        <div class="max-w-5xl mx-auto space-y-8">
            <h1 class="text-5xl md:text-7xl font-bold leading-tight">
                Program <span class="text-yellow-300">Kami</span>
            </h1>
            <p class="text-xl md:text-2xl text-blue-100 max-w-3xl mx-auto leading-relaxed">
                Temukan pengalaman tak terlupakan melalui program volunteering, leadership, dan pengembangan diri bersama pemuda dari seluruh Indonesia.
            </p>
        </div>
    </div>

    <!-- Wave Bottom -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 120L60 100C120 80 240 40 360 35C480 30 600 60 720 75C840 90 960 90 1080 85C1200 80 1320 70 1380 65L1440 60V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="#F9FAFB" />
        </svg>
    </div>
</div>

<!-- Program List Section -->
<div id="program-list" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Semua <span class="text-blue-600">Program</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Pilih program yang sesuai dengan minat dan jadwalmu. Setiap program dirancang untuk memberikan pengalaman berharga dan jaringan nasional.
            </p>
            <div class="w-24 h-1.5 bg-blue-600 mx-auto rounded-full mt-6"></div>
        </div>

        <!-- Filter Jenis Program (jika ada) -->
        @if(request('jenis'))
        <div class="mb-10 text-center">
            <div class="inline-flex items-center gap-3 px-6 py-3 bg-blue-100 text-blue-700 rounded-full text-lg font-semibold">
                <span>{{ request('jenis') }}</span>
                <a href="{{ route('programs.index') }}" class="text-blue-600 hover:text-blue-800">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </a>
            </div>
        </div>
        @endif

        <!-- Program Grid -->
        @if($programs->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            @foreach($programs as $program)
            <div class="group bg-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3">
                <div class="relative h-120 overflow-hidden">
                    @if($program->poster)
                    <img src="{{ asset('storage/' . $program->poster) }}" 
                         alt="{{ $program->nama_program }}" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    @else
                    <div class="w-full h-full bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center">
                        <svg class="w-32 h-32 text-white opacity-40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                        </svg>
                    </div>
                    @endif

                    <!-- Status Badge -->
                    <div class="absolute top-4 right-4">
                        <span class="px-4 py-2 text-sm font-bold rounded-full shadow-lg {{ $program->status === 'aktif' ? 'bg-green-500' : ($program->status === 'segera' ? 'bg-yellow-500' : 'bg-red-500') }} text-white">
                            {{ $program->status === 'aktif' ? 'Dibuka' : ($program->status === 'segera' ? 'Segera Dibuka' : 'Selesai') }}
                        </span>
                    </div>

                    <!-- Jenis Program Badge -->
                    <div class="absolute top-4 left-4">
                        <span class="px-4 py-2 text-sm font-bold bg-white/90 backdrop-blur-sm rounded-full shadow">
                            {{ $program->jenisProgram->nama ?? 'Program' }}
                        </span>
                    </div>
                </div>

                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors line-clamp-2">
                        {{ $program->nama_program }}
                    </h3>

                    <div class="space-y-3 mb-6 text-gray-600">
                        @if($program->lokasi)
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="font-medium">{{ $program->lokasi }}</span>
                        </div>
                        @endif

                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="font-medium">
                                {{ \Carbon\Carbon::parse($program->tanggal_mulai)->format('d M Y') }}
                                @if($program->tanggal_selesai)
                                - {{ \Carbon\Carbon::parse($program->tanggal_selesai)->format('d M Y') }}
                                @endif
                            </span>
                        </div>
                    </div>

                    <a href="{{ route('programs.show', $program->slug) }}" 
                       class="inline-flex items-center gap-3 text-blue-600 font-bold text-lg hover:text-blue-800 transition">
                        <span>Lihat Detail Program</span>
                        <svg class="w-6 h-6 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-16 flex justify-center">
            {{ $programs->links('pagination::tailwind') }}
        </div>
        @else
        <div class="text-center py-20">
            <svg class="mx-auto h-24 w-24 text-gray-300 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            <h3 class="text-2xl font-bold text-gray-800 mb-4">Belum Ada Program Tersedia</h3>
            <p class="text-lg text-gray-600">Program baru akan segera diumumkan. Pantau terus website kami!</p>
        </div>
        @endif
    </div>
</div>

<!-- CTA Section -->
<div class="py-20 bg-gradient-to-r from-blue-600 to-indigo-700 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">
            Siap Menjelajah Cakrawala Baru?
        </h2>
        <p class="text-xl mb-10 max-w-3xl mx-auto">
            Daftar sekarang dan jadilah bagian dari generasi pemuda yang menginspirasi Indonesia
        </p>
        <a href="https://wa.me/6281234567890?text=Halo, saya ingin mendaftar program Cakrawala Muda" 
           target="_blank"
           class="inline-flex items-center gap-4 bg-green-500 hover:bg-green-600 px-12 py-6 rounded-2xl font-bold text-2xl transition transform hover:scale-105 shadow-2xl">
            <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.198.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.149-1.255-.814-2.391-2.582-.297-.297-.52-.528-.52-.865 0-.336.148-.667.445-.867.297-.198.644-.297.893-.149.25.149.744.595 1.042.844.297.25.595.347.893.248.297-.099.644-.446.794-.744.149-.297.297-.595.198-.893-.099-.297-.446-.744-1.043-.993-.595-.248-1.39-.446-1.688-.347-.297.099-.595.446-.744.744-.149.297-.446.893-.446 1.19 0 .297.099.595.297.893.198.297.595.744 1.39 1.19.793.446 1.687.744 2.485.595.793-.149 1.687-.595 2.484-1.19.793-.595 1.39-1.49 1.39-2.582 0-1.093-.744-2.036-1.835-2.582l-.297-.099zM12 2C6.477 2 2 6.477 2 12c0 1.985.59 3.825 1.6 5.36l-1.55 5.64L8.6 21.4C10.135 22.41 11.935 23 12 23c5.523 0 10-4.477 10-10S17.523 3 12 3z"/>
            </svg>
            Daftar Sekarang via WhatsApp
        </a>
    </div>
</div>
@endsection