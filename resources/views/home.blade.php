@extends('layouts.app')

@section('title', 'Home - Cakrawala Muda Indonesia')

@section('content')
    <!-- Section 1: Hero -->
    <div class="relative bg-gradient-to-br from-blue-900 via-blue-700 to-indigo-900 text-white overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 left-10 w-72 h-72 bg-white rounded-full blur-3xl animate-float"></div>
            <div class="absolute bottom-10 right-10 w-96 h-96 bg-blue-300 rounded-full blur-3xl animate-float"
                style="animation-delay: 1s;"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32 md:py-48">
            <div class="text-center space-y-8">
                <!-- Main Heading -->
                <h1 class="text-5xl md:text-7xl font-bold leading-tight animate-fadeInUp" style="animation-delay: 0.2s;">
                    Cakrawala Muda<br />
                    <span class="text-yellow-300">Indonesia</span>
                </h1>

                <p class="text-xl md:text-2xl text-blue-100 max-w-3xl mx-auto leading-relaxed animate-fadeInUp"
                    style="animation-delay: 0.4s;">
                    Menjelajah Cakrawala, Menginspirasi Indonesia
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row justify-center gap-4 pt-4 animate-fadeInUp"
                    style="animation-delay: 0.6s;">
                    <a href="#our-program"
                        class="group inline-flex items-center justify-center gap-2 bg-white/10 backdrop-blur-lg border-2 border-white/30 text-white px-8 py-4 rounded-2xl font-bold text-lg hover:bg-white hover:text-blue-700 hover:scale-105 transition-all duration-300">
                        <svg class="w-6 h-6 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                        Detail
                    </a>
                </div>

                <!-- Stats Preview -->
                <div class="flex flex-wrap justify-center gap-8 pt-12 animate-fadeInUp" style="animation-delay: 0.8s;">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-yellow-300">500+</div>
                        <div class="text-blue-100 text-sm">Alumni</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-yellow-300">25+</div>
                        <div class="text-blue-100 text-sm">Provinsi</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-yellow-300">{{ $activeProgramsCount }}+</div>
                        <div class="text-blue-100 text-sm">Program</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Wave Bottom -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0 120L60 110C120 100 240 80 360 70C480 60 600 60 720 65C840 70 960 80 1080 85C1200 90 1320 90 1380 90L1440 90V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z"
                    fill="white" />
            </svg>
        </div>
    </div>

    <!-- Section 2: Program Ongoing -->
    <div class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    Program <span class="text-blue-600">On Going</span>
                </h2>
                <div class="w-24 h-1.5 bg-blue-600 mx-auto rounded-full"></div>
            </div>

            @php
                $ongoingProgramItem = $ongoingProgram->where('status', 'aktif')->first();
            @endphp

            @if ($ongoingProgramItem)
                <div class="max-w-4xl mx-auto">
                    <div class="bg-gradient-to-r from-blue-600 to-indigo-700 rounded-3xl overflow-hidden shadow-2xl">
                        <div class="md:flex">
                            <div class="md:w-2/5 relative">
                                @if ($ongoingProgramItem->poster)
                                    <img src="{{ asset('storage/' . $ongoingProgramItem->poster) }}"
                                        alt="{{ $ongoingProgramItem->nama_program }}"
                                        class="w-full h-64 md:h-full object-cover">
                                @else
                                    <div
                                        class="w-full h-full bg-gradient-to-r from-blue-500 to-blue-700 flex items-center justify-center">
                                        <svg class="w-24 h-24 text-white opacity-50" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                        </svg>
                                    </div>
                                @endif
                                <div class="absolute inset-0 bg-gradient-to-r from-blue-600/40 to-transparent md:hidden">
                                </div>
                                <div class="absolute top-4 left-4">
                                    <span
                                        class="px-4 py-2 bg-white/90 backdrop-blur-sm text-blue-700 font-bold rounded-full text-sm">🔥
                                        On Going</span>
                                </div>
                            </div>

                            <div class="md:w-3/5 p-8 md:p-12">
                                <div class="flex items-center gap-2 mb-4">
                                    <span class="px-3 py-1 bg-white/20 text-white text-sm font-semibold rounded-full">
                                        {{ $ongoingProgramItem->jenisProgram->nama ?? 'Program Unggulan' }}
                                    </span>
                                    <span
                                        class="px-3 py-1 bg-yellow-400/20 text-yellow-300 text-sm font-semibold rounded-full">✨
                                        Trending</span>
                                </div>
                                <h3 class="text-2xl md:text-3xl font-bold text-white mb-4">
                                    {{ $ongoingProgramItem->nama_program }}
                                </h3>

                                <div class="text-blue-100 mb-6 leading-relaxed">
                                    {!! $ongoingProgramItem->keterangan ?? 'Pengalaman tak terlupakan bersama pemuda-pemudi Indonesia.' !!}
                                </div>
                                <div class="flex flex-wrap gap-4 mb-8">
                                    @if ($ongoingProgramItem->lokasi)
                                        <div class="flex items-center gap-2 text-blue-100">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                            <span class="font-medium">{{ $ongoingProgramItem->lokasi }}</span>
                                        </div>
                                    @endif
                                    @if ($ongoingProgramItem->tanggal_mulai)
                                        <div class="flex items-center gap-2 text-blue-100">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                            <span class="font-medium">
                                                {{ \Carbon\Carbon::parse($ongoingProgramItem->tanggal_mulai)->format('d M Y') }}
                                                @if ($ongoingProgramItem->tanggal_selesai)
                                                    -
                                                    {{ \Carbon\Carbon::parse($ongoingProgramItem->tanggal_selesai)->format('d M Y') }}
                                                @endif
                                            </span>
                                        </div>
                                    @endif
                                </div>

                                <div class="flex flex-col sm:flex-row gap-4">
                                    <a href="#"
                                        class="group flex-1 inline-flex items-center justify-center gap-3 bg-white text-blue-700 px-6 py-3 rounded-xl font-bold text-base hover:shadow-2xl hover:scale-105 transition-all duration-300">
                                        <svg class="w-6 h-6 group-hover:rotate-12 transition-transform" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                        Daftar Program
                                    </a>
                                    <a href="{{ route('programs.show', $ongoingProgramItem->slug ?? '#') }}"
                                        class="group flex-1 inline-flex items-center justify-center gap-3 bg-white/20 backdrop-blur-lg border-2 border-white/30 text-white px-6 py-3 rounded-xl font-bold text-base hover:bg-white hover:text-blue-700 hover:scale-105 transition-all duration-300">
                                        <svg class="w-6 h-6 group-hover:rotate-12 transition-transform" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        Detail Program
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="text-center py-12">
                    <p class="text-gray-600 text-lg">Tidak ada program yang sedang berlangsung saat ini.</p>
                </div>
            @endif
        </div>
    </div>

    <!-- Section 3: Our Program (Slider Tanpa JavaScript - Tailwind Only) -->
    <div id="our-program" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    Our <span class="text-blue-600">Program</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Temukan program-program terbaik untuk pengembangan diri dan jejaring pemuda Indonesia
                </p>
                <div class="w-24 h-1.5 bg-blue-600 mx-auto rounded-full mt-4"></div>
            </div>

            @if ($jenisPrograms && $jenisPrograms->count() > 0)
                <div class="relative group">
                    <!-- Scroll Container dengan Scroll Snap -->
                    <div class="overflow-x-auto scrollbar-hide scroll-smooth snap-x snap-mandatory -mx-4 px-4">
                        <div class="flex gap-8 min-w-max pb-4">
                            @foreach ($jenisPrograms->take(9) as $jenisProgram) <!-- Ambil lebih banyak agar bisa scroll -->
                                <div class="flex-shrink-0 w-full sm:w-80 lg:w-96 snap-start">
                                    <div class="group bg-white rounded-2xl shadow-lg overflow-hidden h-full transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                                        <div class="relative h-120 overflow-hidden bg-gray-100">
                                            @if ($jenisProgram->poster)
                                                <img src="{{ asset('storage/' . $jenisProgram->poster) }}"
                                                     alt="{{ $jenisProgram->nama }}"
                                                     class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-110">
                                            @else
                                                <div class="w-full h-full bg-gradient-to-r from-blue-500 to-indigo-600 flex items-center justify-center">
                                                    <svg class="w-16 h-16 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                              d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                </div>
                                            @endif

                                            <!-- Status Badge -->
                                            <div class="absolute top-4 right-4">
                                                @if ($jenisProgram->status == 'aktif')
                                                    <span class="px-3 py-1.5 text-xs font-bold bg-green-500 text-white rounded-full shadow-lg">
                                                        Sedang Dibuka
                                                    </span>
                                                @else
                                                    <span class="px-3 py-1.5 text-xs font-bold bg-gray-500 text-white rounded-full shadow-lg">
                                                        Selesai
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                        </div>

                                        <div class="p-6">
                                            <h3 class="text-xl font-bold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors text-center">
                                                {{ $jenisProgram->nama }}
                                            </h3>

                                            <div class="pt-4 border-t border-gray-100 text-center">
                                                <a href="{{ route('programs.index', ['jenis' => $jenisProgram->nama]) }}"
                                                   class="group/btn inline-flex items-center gap-2 text-blue-600 font-bold hover:text-blue-700 transition-colors">
                                                    <span>Detail</span>
                                                    <svg class="w-5 h-5 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Tombol Prev / Next (muncul saat hover di desktop) -->
                    <button class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/90 backdrop-blur p-4 rounded-full shadow-lg opacity-0 group-hover:opacity-100 transition-all duration-300 hover:scale-110 z-10"
                            onclick="document.querySelector('.overflow-x-auto').scrollBy({left: -400, behavior: 'smooth'})">
                        <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>

                    <button class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/90 backdrop-blur p-4 rounded-full shadow-lg opacity-0 group-hover:opacity-100 transition-all duration-300 hover:scale-110 z-10"
                            onclick="document.querySelector('.overflow-x-auto').scrollBy({left: 400, behavior: 'smooth'})">
                        <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            @else
                <div class="text-center py-12">
                    <p class="text-gray-600 text-lg">Belum ada program yang tersedia saat ini.</p>
                </div>
            @endif

            <!-- View All Button -->
            <div class="text-center mt-16">
                <a href="{{ route('programs.index') }}"
                    class="group inline-flex items-center gap-3 bg-blue-600 text-white px-10 py-4 rounded-2xl font-bold text-lg hover:shadow-2xl hover:scale-105 hover:bg-blue-700 transition-all duration-300">
                    <span>Lihat Semua Program</span>
                    <svg class="w-6 h-6 group-hover:translate-x-1 transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Section 4: Testimonial Alumni -->
    <div class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    Testimoni <span class="text-blue-600">Alumni</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Cerita inspiratif dari alumni yang telah mengikuti program Cakrawala Muda Indonesia
                </p>
                <div class="w-24 h-1.5 bg-blue-600 mx-auto rounded-full mt-4"></div>
            </div>

            <!-- Testimonial Grid -->
            @if ($alumniTestimonials && $alumniTestimonials->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($alumniTestimonials as $alumni)
                        <div
                            class="bg-gradient-to-br from-blue-50 to-white rounded-2xl p-8 shadow-lg border border-blue-100 hover:shadow-xl transition-all duration-300">
                            <div class="flex items-center mb-6">
                                <div class="w-16 h-16 rounded-full overflow-hidden mr-4 flex-shrink-0">
                                    @if ($alumni->foto)
                                        <img src="{{ asset('storage/' . $alumni->foto) }}" alt="{{ $alumni->nama }}"
                                            class="w-full h-full object-cover">
                                    @else
                                        <div
                                            class="w-full h-full bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center text-white font-bold text-xl">
                                            {{ strtoupper(substr($alumni->nama, 0, 2)) }}
                                        </div>
                                    @endif
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900 text-lg">{{ $alumni->nama }}</h4>
                                    <p class="text-sm text-blue-600">{{ $alumni->jenisProgram->nama ?? 'Program' }}
                                    </p>
                                </div>
                            </div>
                            <p class="text-gray-700 italic leading-relaxed">
                                "{{ Str::limit($alumni->testimoni, 200) }}"
                            </p>
                        </div>
                    @endforeach
                </div>
            @elseif ($testimonials && $testimonials->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($testimonials as $testimonial)
                        <div
                            class="bg-gradient-to-br from-blue-50 to-white rounded-2xl p-8 shadow-lg border border-blue-100">
                            <div class="flex items-center mb-6">
                                @if ($testimonial->avatar)
                                    <img src="{{ asset('storage/' . $testimonial->avatar) }}"
                                        alt="{{ $testimonial->name }}"
                                        class="w-14 h-14 rounded-full object-cover mr-4 shadow-lg">
                                @else
                                    <div
                                        class="w-14 h-14 rounded-full bg-gradient-to-r from-blue-500 to-indigo-600 flex items-center justify-center text-white font-bold text-xl mr-4 shadow-lg">
                                        {{ strtoupper(substr($testimonial->name, 0, 2)) }}
                                    </div>
                                @endif
                                <div>
                                    <h4 class="font-bold text-gray-900 text-lg">{{ $testimonial->name }}</h4>
                                    <p class="text-sm text-gray-600">{{ $testimonial->program ?? 'Alumni Program' }}</p>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="flex text-yellow-500">
                                    @for ($i = 0; $i < 5; $i++)
                                        @if ($i < ($testimonial->rating ?? 5))
                                            ★
                                        @else
                                            ☆
                                        @endif
                                    @endfor
                                </div>
                            </div>
                            <p class="text-gray-700 italic leading-relaxed">
                                "{{ $testimonial->content }}"
                            </p>
                        </div>
                    @endforeach
                </div>
            @else
                <!-- Placeholder testimonials jika tidak ada data -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ([['name' => 'Ahmad Rizki', 'program' => 'Jelajah Cakrawala Muda 2023', 'initials' => 'AR', 'color' => 'from-blue-500 to-indigo-600'], ['name' => 'Siti Maulida', 'program' => 'Volunteering Weekend 2023', 'initials' => 'SM', 'color' => 'from-green-500 to-teal-600'], ['name' => 'Budi Dermawan', 'program' => 'Jelajah Cakrawala Muda 2022', 'initials' => 'BD', 'color' => 'from-purple-500 to-pink-600']] as $testimonial)
                        <div
                            class="bg-gradient-to-br from-blue-50 to-white rounded-2xl p-8 shadow-lg border border-blue-100">
                            <div class="flex items-center mb-6">
                                <div
                                    class="w-14 h-14 rounded-full bg-gradient-to-r {{ $testimonial['color'] }} flex items-center justify-center text-white font-bold text-xl mr-4 shadow-lg">
                                    {{ $testimonial['initials'] }}
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900 text-lg">{{ $testimonial['name'] }}</h4>
                                    <p class="text-sm text-gray-600">{{ $testimonial['program'] }}</p>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="flex text-yellow-500">
                                    ★★★★★
                                </div>
                            </div>
                            <p class="text-gray-700 italic leading-relaxed">
                                "{{ $testimonial['name'] == 'Ahmad Rizki' ? 'Pengalaman yang luar biasa! Saya tidak hanya belajar tentang budaya Dieng, tapi juga membangun jaringan dengan pemuda-pemudi hebat dari seluruh Indonesia.' : ($testimonial['name'] == 'Siti Maulida' ? 'Program volunteering di akhir pekan sangat cocok untuk mahasiswa seperti saya. Saya bisa berkontribusi tanpa mengganggu kuliah.' : 'Sebagai fresh graduate, program ini memberikan saya pengalaman leadership yang berharga. Networking yang dibangun sangat membantu karir saya.') }}"
                            </p>
                        </div>
                    @endforeach
                </div>
            @endif

            <!-- View All Testimonials -->
            <div class="text-center mt-16">
                @if ($alumniTestimonials && $alumniTestimonials->count() > 0)
                    <a href="{{ route('alumni.index') }}"
                        class="group inline-flex items-center gap-2 bg-white border-2 border-blue-600 text-blue-600 px-8 py-3 rounded-xl font-bold text-lg hover:bg-blue-50 hover:shadow-lg transition-all duration-300">
                        <span>Lihat Semua Alumni</span>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                @elseif ($testimonials && $testimonials->count() > 0)
                    <a href="{{ route('testimonials.index') }}"
                        class="group inline-flex items-center gap-2 bg-white border-2 border-blue-600 text-blue-600 px-8 py-3 rounded-xl font-bold text-lg hover:bg-blue-50 hover:shadow-lg transition-all duration-300">
                        <span>Lihat Semua Testimoni</span>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                @endif
            </div>
        </div>
    </div>

    <!-- CSS Custom -->
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        .animate-float { animation: float 6s ease-in-out infinite; }

        .animate-fadeInUp {
            animation: fadeInUp 0.8s ease-out forwards;
            opacity: 0;
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Sembunyikan scrollbar tapi tetap bisa scroll */
        .scrollbar-hide {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;     /* Firefox */
        }
        .scrollbar-hide::-webkit-scrollbar {
            display: none;             /* Chrome, Safari, Opera */
        }
    </style>
@endsection