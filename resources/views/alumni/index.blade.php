@extends('layouts.app')

@section('title', 'Alumni - Cakrawala Muda Indonesia')

@section('content')
<!-- Hero Section -->
<div class="relative h-96 md:h-screen max-h-screen overflow-hidden">
    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&q=80&w=1950" 
         alt="Alumni Cakrawala Muda Indonesia" 
         class="absolute inset-0 w-full h-full object-cover">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/60 to-transparent"></div>

    <!-- Konten Hero -->
    <div class="relative h-full flex items-center justify-center px-4 sm:px-6 lg:px-8">
        <div class="text-center text-white max-w-5xl mx-auto">
            <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">
                Alumni <span class="text-yellow-300">Cakrawala Muda</span><br />
                Indonesia
            </h1>
            <p class="text-xl md:text-2xl text-blue-100 max-w-3xl mx-auto leading-relaxed mb-10">
                Ribuan pemuda inspiratif yang telah menjadi bagian dari perjalanan kami. Mereka kini aktif berkarya di berbagai bidang, membawa semangat perubahan positif ke seluruh penjuru Indonesia.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-6">
                <a href="#alumni-list" class="bg-white text-blue-900 px-10 py-5 rounded-2xl font-bold text-xl hover:shadow-2xl hover:scale-105 transition">
                    Lihat Alumni Kami
                </a>
                <a href="https://wa.me/6281234567890?text=Halo, saya alumni Cakrawala Muda dan ingin bergabung di komunitas" 
                   target="_blank"
                   class="bg-green-500 hover:bg-green-600 px-10 py-5 rounded-2xl font-bold text-xl hover:shadow-2xl hover:scale-105 transition">
                    Gabung Komunitas Alumni
                </a>
            </div>
        </div>
    </div>

    <!-- Wave Bottom -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 120L60 100C120 80 240 40 360 35C480 30 600 60 720 75C840 90 960 90 1080 85C1200 80 1320 70 1380 65L1440 60V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="white" />
        </svg>
    </div>
</div>

<!-- Stats Alumni -->
<div class="py-16 bg-blue-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
            <div class="bg-white rounded-3xl shadow-xl p-8">
                <div class="text-5xl font-bold text-blue-600 mb-4">{{ $totalAlumni }}+</div>
                <p class="text-xl text-gray-700 font-semibold">Total Alumni</p>
            </div>
            <div class="bg-white rounded-3xl shadow-xl p-8">
                <div class="text-5xl font-bold text-indigo-600 mb-4">{{ $totalProvinces }}+</div>
                <p class="text-xl text-gray-700 font-semibold">Provinsi di Indonesia</p>
            </div>
            <div class="bg-white rounded-3xl shadow-xl p-8">
                <div class="text-5xl font-bold text-purple-600 mb-4">{{ $totalAlumni > 0 ? floor($totalAlumni * 0.3) : 150 }}+</div>
                <p class="text-xl text-gray-700 font-semibold">Kini Berkarya di Berbagai Bidang</p>
            </div>
        </div>
    </div>
</div>

<!-- Daftar Alumni -->
<div id="alumni-list" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Kenali <span class="text-blue-600">Alumni Kami</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Beberapa alumni inspiratif yang telah memberikan dampak nyata setelah mengikuti program Cakrawala Muda Indonesia
            </p>
            <div class="w-24 h-1.5 bg-blue-600 mx-auto rounded-full mt-6"></div>
        </div>

        <!-- Grid Alumni (contoh 6 alumni, bisa ditambah dengan loop jika dari database) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
            @forelse($alumni as $alumniItem)
            <!-- Alumni Item -->
            <div class="group bg-gradient-to-br from-blue-50 to-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-300">
                <div class="relative h-80 overflow-hidden">
                    <img src="{{ asset('storage/' . $alumniItem->foto) }}" 
                         alt="{{ $alumniItem->nama }}" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 text-white">
                        <h3 class="text-2xl font-bold">{{ $alumniItem->nama }}</h3>
                        <p class="text-lg opacity-90">{{ $alumniItem->jenisProgram->nama ?? 'Program' }}</p>
                    </div>
                </div>
            </div>
            @empty
            <!-- Placeholder jika tidak ada data -->
            <div class="col-span-full text-center py-12">
                <div class="max-w-md mx-auto">
                    <svg class="w-24 h-24 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Belum Ada Alumni</h3>
                    <p class="text-gray-600">Data alumni akan ditampilkan di sini setelah ditambahkan dari admin panel.</p>
                </div>
            </div>
            @endforelse
        </div>

        <!-- Tombol Load More (jika data banyak) -->
        @if($alumni->count() > 0)
        <div class="text-center mt-16">
            <p class="text-gray-600 text-lg">
                Menampilkan {{ $alumni->count() }} alumni inspiratif
            </p>
        </div>
        @endif
    </div>
</div>

<!-- CTA Bergabung -->
<div class="py-20 bg-gradient-to-r from-blue-600 to-indigo-700 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">
            Jadilah Bagian dari Alumni Berikutnya!
        </h2>
        <p class="text-xl mb-10 max-w-3xl mx-auto">
            Daftar sekarang dan ciptakan cerita inspiratifmu bersama Cakrawala Muda Indonesia
        </p>
        <a href="{{ route('programs.index') }}" class="bg-white text-blue-700 px-12 py-6 rounded-2xl font-bold text-2xl hover:shadow-2xl hover:scale-105 transition inline-block">
            Lihat Program Aktif
        </a>
    </div>
</div>
@endsection