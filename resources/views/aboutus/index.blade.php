@extends('layouts.app')

@section('title', 'About Us - Cakrawala Muda Indonesia')

@section('content')
<!-- Section 1: Hero - The History Begins -->
<div class="relative h-screen max-h-screen overflow-hidden bg-gradient-to-br from-blue-900 via-indigo-800 to-purple-900 text-white">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-20">
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1557682250-33bd709cbe1d?ixlib=rb-4.0.3&auto=format&fit=crop&q=80')] bg-cover bg-center"></div>
    </div>

    <div class="relative h-full flex items-center justify-center px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-5xl mx-auto">
            <h1 class="text-5xl md:text-7xl font-bold mb-8 leading-tight">
                The History<br />
                <span class="text-yellow-300">Begins</span>
            </h1>
            <p class="text-xl md:text-2xl text-blue-100 max-w-3xl mx-auto leading-relaxed">
                Perjalanan Cakrawala Muda Indonesia dimulai dari mimpi besar sekelompok pemuda yang ingin menginspirasi perubahan positif bagi bangsa melalui aksi nyata, kepemimpinan, dan kolaborasi lintas generasi.
            </p>
            <div class="mt-12">
                <a href="#about-us" class="inline-flex items-center gap-3 bg-white text-blue-900 px-10 py-4 rounded-2xl font-bold text-lg hover:shadow-2xl hover:scale-105 transition-all duration-300">
                    <span>Kenali Kami Lebih Dekat</span>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                    </svg>
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

<!-- Section 2: About Us -->
<div id="about-us" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                ABOUT <span class="text-blue-600">US</span>
            </h2>
            <div class="w-24 h-1.5 bg-blue-600 mx-auto rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Gambar Ilustrasi -->
            <div class="order-2 lg:order-1">
                <img src="{{ asset('images/logo.png') }}"
                    alt="Tim Cakrawala Muda Indonesia"
                    class="w-full object-cover">
                    {{-- rounded-3xl shadow-2xl --}}
            </div>

            <!-- Teks About Us -->
            <div class="order-1 lg:order-2 space-y-6">
                <p class="text-lg text-gray-700 leading-relaxed">
                    <strong>Cakrawala Muda Indonesia</strong> adalah platform pemuda yang didirikan untuk memberdayakan generasi muda Indonesia melalui program-program pengembangan diri, volunteering, leadership, dan jejaring nasional.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Kami percaya bahwa setiap pemuda memiliki potensi besar untuk menjadi agen perubahan. Melalui berbagai program seperti Jelajah Cakrawala Muda, Volunteering Weekend, dan Sehari Jadi Volunteer, kami menciptakan ruang bagi ribuan pemuda dari berbagai daerah untuk belajar, berkontribusi, dan saling menginspirasi.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Sejak berdiri, kami telah menjangkau lebih dari <strong>25 provinsi</strong> dan melibatkan <strong>500+ alumni</strong> yang kini aktif berkarya di berbagai bidang — dari pendidikan, lingkungan, sosial, hingga entrepreneurship.
                </p>
                {{-- <div class="pt-6">
                    <a href="#visi-misi" class="inline-flex items-center gap-3 text-blue-600 font-bold text-lg hover:text-blue-800 transition">
                        Lihat Visi & Misi Kami
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div> --}}
            </div>
        </div>
    </div>
</div>

<!-- Section 3: Visi Misi -->
<div id="visi-misi" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                VISI & <span class="text-blue-600">MISI</span>
            </h2>
            <div class="w-24 h-1.5 bg-blue-600 mx-auto rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Visi -->
            <div class="bg-white rounded-3xl shadow-xl p-10 hover:shadow-2xl transition-shadow duration-300">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center text-white text-3xl font-bold">
                        V
                    </div>
                    <h3 class="text-3xl font-bold text-gray-900">Visi</h3>
                </div>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Menjadi platform pemuda terdepan di Indonesia yang menginspirasi dan memberdayakan jutaan generasi muda untuk menciptakan perubahan positif bagi bangsa melalui kepemimpinan, kolaborasi, dan aksi nyata.
                </p>
            </div>

            <!-- Misi -->
            <div class="bg-white rounded-3xl shadow-xl p-10 hover:shadow-2xl transition-shadow duration-300">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-16 h-16 bg-indigo-600 rounded-full flex items-center justify-center text-white text-3xl font-bold">
                        M
                    </div>
                    <h3 class="text-3xl font-bold text-gray-900">Misi</h3>
                </div>
                <ul class="space-y-4 text-lg text-gray-700">
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span>Menyelenggarakan program pengembangan diri berkualitas tinggi yang inklusif dan terjangkau</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span>Membangun jaringan pemuda nasional yang solid dan saling mendukung</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span>Mendorong aksi sosial dan volunteering sebagai gaya hidup pemuda Indonesia</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span>Menciptakan pemimpin muda yang berintegritas, visioner, dan peduli terhadap bangsa</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Section 4: Pengurus -->
<div class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                PENGURUS <span class="text-blue-600">INTI</span>
            </h2>
            <div class="w-24 h-1.5 bg-blue-600 mx-auto rounded-full"></div>
            <p class="text-xl text-gray-600 mt-6 max-w-3xl mx-auto">
                Tim inti yang berdedikasi penuh untuk mewujudkan visi Cakrawala Muda Indonesia
            </p>
        </div>

        <!-- Struktur Organisasi -->
        @if($pengurus && $pengurus->count() > 0)
        @php
        // Kelompokkan pengurus berdasarkan divisi
        $bph = $pengurus->where('divisi', 'BPH')->sortBy('urutan');
        $divisi_lain = $pengurus->whereNotIn('divisi', ['BPH'])->groupBy('divisi');
        @endphp

        <div class="max-w-6xl mx-auto">
            <!-- BPH (Tingkat Atas) -->
            @if($bph->count() > 0)
            <div class="mb-12">
                <div class="flex flex-wrap justify-center gap-6">
                    @foreach($bph as $person)
                    <div class="w-40">
                        <div class="group bg-white rounded-lg border-2 border-blue-600 overflow-hidden hover:border-blue-700 transition-colors duration-300">
                            <!-- Foto -->
                            <div class="w-full">
                                @if($person->foto)
                                <img src="{{ asset('storage/' . $person->foto) }}"
                                    alt="{{ $person->nama }}"
                                    class="w-full h-48 object-cover">
                                @else
                                <div class="w-full h-48 bg-blue-600 flex items-center justify-center">
                                    <span class="text-white text-3xl font-bold">{{ strtoupper(substr($person->nama, 0, 2)) }}</span>
                                </div>
                                @endif
                            </div>

                            <!-- Info -->
                            <div class="p-3 text-center bg-blue-600 text-white">
                                <h4 class="text-sm font-bold mb-0.5">{{ $person->nama }}</h4>
                                <p class="text-xs">{{ $person->jabatan }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Garis Penghubung -->
                @if($divisi_lain->count() > 0)
                <div class="flex justify-center my-6">
                    <div class="w-px h-12 bg-gray-300"></div>
                </div>
                @endif
            </div>
            @endif

            <!-- Divisi Lainnya (Tingkat Bawah) -->
            @if($divisi_lain->count() > 0)
            <div class="space-y-10">
                @foreach($divisi_lain as $divisiName => $members)
                <div>
                    <!-- Nama Divisi -->
                    <div class="text-center mb-6">
                        <h3 class="inline-block px-4 py-1.5 bg-blue-600 text-white text-sm font-bold rounded">
                            {{ $divisiName }}
                        </h3>
                    </div>

                    <!-- Anggota Divisi -->
                    <div class="flex flex-wrap justify-center gap-4">
                        @foreach($members->sortBy('urutan') as $person)
                        <div class="w-36">
                            <div class="group bg-white rounded-lg border border-gray-300 overflow-hidden hover:border-blue-600 transition-colors duration-300">
                                <!-- Foto -->
                                <div class="w-full">
                                    @if($person->foto)
                                    <img src="{{ asset('storage/' . $person->foto) }}"
                                        alt="{{ $person->nama }}"
                                        class="w-full h-44 object-cover">
                                    @else
                                    <div class="w-full h-44 bg-gray-200 flex items-center justify-center">
                                        <span class="text-gray-600 text-2xl font-bold">{{ strtoupper(substr($person->nama, 0, 2)) }}</span>
                                    </div>
                                    @endif
                                </div>

                                <!-- Info -->
                                <div class="p-2 text-center">
                                    <h4 class="text-xs font-bold text-gray-900">{{ $person->nama }}</h4>
                                    <p class="text-xs text-gray-600">{{ $person->jabatan }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
        @else
        <div class="text-center py-12">
            <p class="text-gray-600 text-lg">Data pengurus akan segera ditampilkan.</p>
        </div>
        @endif
    </div>
</div>

@endsection

<!-- CSS Custom untuk scrollbar hide -->
<style>
    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }
</style>