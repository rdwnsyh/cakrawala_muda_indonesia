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
                <div class="text-5xl font-bold text-blue-600 mb-4">500+</div>
                <p class="text-xl text-gray-700 font-semibold">Total Alumni</p>
            </div>
            <div class="bg-white rounded-3xl shadow-xl p-8">
                <div class="text-5xl font-bold text-indigo-600 mb-4">25+</div>
                <p class="text-xl text-gray-700 font-semibold">Provinsi di Indonesia</p>
            </div>
            <div class="bg-white rounded-3xl shadow-xl p-8">
                <div class="text-5xl font-bold text-purple-600 mb-4">150+</div>
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
            <!-- Alumni 1 -->
            <div class="group bg-gradient-to-br from-blue-50 to-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-300">
                <div class="relative h-80 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1557862921-37829c790f19?ixlib=rb-4.0.3&auto=format&fit=crop&q=80&w=800" 
                         alt="Ahmad Rizki" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 text-white">
                        <h3 class="text-2xl font-bold">Ahmad Rizki</h3>
                        <p class="text-lg opacity-90">Alumni Jelajah Cakrawala Muda 2023</p>
                    </div>
                </div>
                <div class="p-8">
                    <p class="text-gray-700 mb-4 italic">
                        "Program ini membuka cakrawala saya tentang leadership dan networking nasional. Kini saya aktif sebagai social entrepreneur di bidang pendidikan pedesaan."
                    </p>
                    <div class="flex items-center gap-4 text-sm text-gray-600">
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>Jakarta</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span>Social Entrepreneur</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Alumni 2 -->
            <div class="group bg-gradient-to-br from-indigo-50 to-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-300">
                <div class="relative h-80 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-4.0.3&auto=format&fit=crop&q=80&w=800" 
                         alt="Siti Maulida" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 text-white">
                        <h3 class="text-2xl font-bold">Siti Maulida</h3>
                        <p class="text-lg opacity-90">Alumni Volunteering Weekend 2023</p>
                    </div>
                </div>
                <div class="p-8">
                    <p class="text-gray-700 mb-4 italic">
                        "Pengalaman volunteering membuka mata saya tentang isu lingkungan. Sekarang saya mengelola komunitas daur ulang di kampus dan mengajar anak-anak tentang sustainability."
                    </p>
                    <div class="flex items-center gap-4 text-sm text-gray-600">
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>Yogyakarta</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span>Environmental Activist</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Alumni 3 -->
            <div class="group bg-gradient-to-br from-purple-50 to-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-300">
                <div class="relative h-80 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&q=80&w=800" 
                         alt="Rizky Pratama" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 text-white">
                        <h3 class="text-2xl font-bold">Rizky Pratama</h3>
                        <p class="text-lg opacity-90">Alumni Sehari Jadi Volunteer 2024</p>
                    </div>
                </div>
                <div class="p-8">
                    <p class="text-gray-700 mb-4 italic">
                        "Satu hari volunteering mengubah pandangan saya tentang kontribusi sosial. Kini saya mendirikan startup edukasi untuk anak marginal."
                    </p>
                    <div class="flex items-center gap-4 text-sm text-gray-600">
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>Bandung</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span>Founder EdTech Startup</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tambahkan alumni lain sesuai kebutuhan -->
            <!-- Contoh Alumni 4-6 bisa ditambahkan dengan pola yang sama -->
        </div>

        <!-- Tombol Load More (jika data banyak) -->
        <div class="text-center mt-16">
            <button class="bg-blue-600 hover:bg-blue-700 text-white px-12 py-5 rounded-2xl font-bold text-xl transition shadow-lg">
                Lihat Lebih Banyak Alumni
            </button>
        </div>
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