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

<!-- Program Sejenis -->
@if($relatedPrograms->count() > 0)
<div class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Program <span class="text-blue-600">Sejenis</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Program lain dari {{ $program->jenisProgram->nama ?? 'kategori yang sama' }}
            </p>
            <div class="w-24 h-1.5 bg-blue-600 mx-auto rounded-full mt-4"></div>
        </div>

        <!-- Grid Program Sejenis -->
        <div id="relatedProgramsContainer" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            @foreach($relatedPrograms as $relatedProgram)
            <div class="related-program-item group bg-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3">
                <div class="relative h-64 overflow-hidden">
                    @if($relatedProgram->poster)
                    <img src="{{ asset('storage/' . $relatedProgram->poster) }}" 
                         alt="{{ $relatedProgram->nama_program }}" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    @else
                    <div class="w-full h-full bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center">
                        <svg class="w-20 h-20 text-white opacity-40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                        </svg>
                    </div>
                    @endif

                    <!-- Status Badge -->
                    <div class="absolute top-4 right-4">
                        <span class="px-3 py-1.5 text-sm font-bold rounded-full shadow-lg {{ $relatedProgram->status === 'aktif' ? 'bg-green-500' : ($relatedProgram->status === 'segera' ? 'bg-yellow-500' : 'bg-red-500') }} text-white">
                            {{ $relatedProgram->status === 'aktif' ? 'Dibuka' : ($relatedProgram->status === 'segera' ? 'Segera' : 'Selesai') }}
                        </span>
                    </div>
                </div>

                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors line-clamp-2">
                        {{ $relatedProgram->nama_program }}
                    </h3>

                    <div class="space-y-2 mb-4 text-gray-600 text-sm">
                        @if($relatedProgram->lokasi)
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            </svg>
                            <span>{{ $relatedProgram->lokasi }}</span>
                        </div>
                        @endif

                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span>
                                {{ \Carbon\Carbon::parse($relatedProgram->tanggal_mulai)->format('d M Y') }}
                            </span>
                        </div>
                    </div>

                    <a href="{{ route('programs.show', $relatedProgram->slug) }}" 
                       class="inline-flex items-center gap-2 text-blue-600 font-bold hover:text-blue-800 transition">
                        <span>Lihat Detail</span>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Button Load More -->
        <div id="loadMoreContainer" class="text-center mt-12">
            <button id="loadMoreBtn" 
                    data-jenis-program-id="{{ $program->jenis_program_id }}"
                    data-exclude-id="{{ $program->id }}"
                    data-offset="3"
                    class="group inline-flex items-center gap-3 bg-blue-600 text-white px-10 py-4 rounded-2xl font-bold text-lg hover:shadow-2xl hover:scale-105 hover:bg-blue-700 transition-all duration-300">
                <span>Lihat Program Lainnya</span>
                <svg class="w-6 h-6 group-hover:translate-y-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <p id="loadingText" class="hidden text-gray-600 mt-4">Memuat program...</p>
            <p id="noMoreText" class="hidden text-gray-600 mt-4">Tidak ada program lainnya</p>
        </div>
    </div>
</div>

<script>
    document.getElementById('loadMoreBtn')?.addEventListener('click', function() {
        const btn = this;
        const jenisProgramId = btn.dataset.jenisProgramId;
        const excludeId = btn.dataset.excludeId;
        let offset = parseInt(btn.dataset.offset);
        
        // Tampilkan loading
        btn.classList.add('hidden');
        document.getElementById('loadingText').classList.remove('hidden');
        
        // Fetch program sejenis berikutnya
        fetch(`/api/programs/related?jenis_program_id=${jenisProgramId}&exclude_id=${excludeId}&offset=${offset}&limit=3`)
            .then(response => response.json())
            .then(data => {
                document.getElementById('loadingText').classList.add('hidden');
                
                if (data.programs && data.programs.length > 0) {
                    // Tambahkan program ke container
                    const container = document.getElementById('relatedProgramsContainer');
                    
                    data.programs.forEach(program => {
                        const programCard = createProgramCard(program);
                        container.insertAdjacentHTML('beforeend', programCard);
                    });
                    
                    // Update offset untuk load berikutnya
                    offset += 3;
                    btn.dataset.offset = offset;
                    
                    // Tampilkan button lagi jika masih ada data
                    if (data.hasMore) {
                        btn.classList.remove('hidden');
                    } else {
                        document.getElementById('noMoreText').classList.remove('hidden');
                    }
                } else {
                    document.getElementById('noMoreText').classList.remove('hidden');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                document.getElementById('loadingText').classList.add('hidden');
                btn.classList.remove('hidden');
                alert('Gagal memuat program. Silakan coba lagi.');
            });
    });
    
    function createProgramCard(program) {
        const statusClass = program.status === 'aktif' ? 'bg-green-500' : (program.status === 'segera' ? 'bg-yellow-500' : 'bg-red-500');
        const statusText = program.status === 'aktif' ? 'Dibuka' : (program.status === 'segera' ? 'Segera' : 'Selesai');
        
        return `
            <div class="related-program-item group bg-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3">
                <div class="relative h-64 overflow-hidden">
                    ${program.poster ? 
                        `<img src="/storage/${program.poster}" alt="${program.nama_program}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">` :
                        `<div class="w-full h-full bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center">
                            <svg class="w-20 h-20 text-white opacity-40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                            </svg>
                        </div>`
                    }
                    <div class="absolute top-4 right-4">
                        <span class="px-3 py-1.5 text-sm font-bold rounded-full shadow-lg ${statusClass} text-white">
                            ${statusText}
                        </span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors line-clamp-2">
                        ${program.nama_program}
                    </h3>
                    <div class="space-y-2 mb-4 text-gray-600 text-sm">
                        ${program.lokasi ? `
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                </svg>
                                <span>${program.lokasi}</span>
                            </div>
                        ` : ''}
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span>${formatDate(program.tanggal_mulai)}</span>
                        </div>
                    </div>
                    <a href="/programs/${program.slug}" class="inline-flex items-center gap-2 text-blue-600 font-bold hover:text-blue-800 transition">
                        <span>Lihat Detail</span>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>
        `;
    }
    
    function formatDate(dateString) {
        const months = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];
        const date = new Date(dateString);
        return `${date.getDate()} ${months[date.getMonth()]} ${date.getFullYear()}`;
    }
</script>
@endif

@endsection