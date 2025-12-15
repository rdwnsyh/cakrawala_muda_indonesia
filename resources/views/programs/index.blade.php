@extends('layouts.app')

@section('title', 'Program - Cakrawala Muda Indonesia')

@section('content')
<div class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Program Kami</h1>
            <p class="text-gray-600">Temukan program-program terbaik untuk pengembangan diri</p>
            
            @if(request('jenis'))
            <div class="mt-4 inline-flex items-center gap-2 px-4 py-2 bg-blue-100 text-blue-700 rounded-lg">
                <span>Filter: {{ request('jenis') }}</span>
                <a href="{{ route('programs.index') }}" class="text-blue-500 hover:text-blue-700">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </a>
            </div>
            @endif
        </div>

        <!-- Filter -->
        @if($jenisPrograms->count() > 0)
        <div class="mb-8">
            <div class="flex flex-wrap gap-2">
                <a href="{{ route('programs.index') }}" 
                   class="px-4 py-2 rounded-lg {{ !request('jenis') ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
                    Semua
                </a>
                @foreach($jenisPrograms as $jenis)
                <a href="{{ route('programs.index', ['jenis' => $jenis]) }}" 
                   class="px-4 py-2 rounded-lg {{ request('jenis') == $jenis ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
                    {{ $jenis }}
                </a>
                @endforeach
            </div>
        </div>
        @endif

        <!-- Program Grid -->
        @if($programs->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($programs as $program)
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <div class="relative h-48">
                    @if($program->poster)
                    <img src="{{ asset('storage/' . $program->poster) }}" 
                         alt="{{ $program->nama_program }}" 
                         class="w-full h-full object-cover">
                    @endif
                    <div class="absolute top-3 right-3">
                        <span class="px-3 py-1 text-xs font-bold rounded-full {{ $program->status === 'aktif' ? 'bg-green-500' : ($program->status === 'segera' ? 'bg-yellow-500' : 'bg-red-500') }} text-white">
                            {{ $program->status === 'aktif' ? 'Aktif' : ($program->status === 'segera' ? 'Segera' : 'Selesai') }}
                        </span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="mb-2">
                        <span class="inline-block px-3 py-1 text-xs font-semibold bg-blue-100 text-blue-700 rounded-full">
                            {{ $program->jenis_program }}
                        </span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $program->nama_program }}</h3>
                    <div class="space-y-2 mb-4">
                        @if($program->lokasi)
                        <div class="flex items-center text-gray-600 text-sm">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            {{ $program->lokasi }}
                        </div>
                        @endif
                        @if($program->tanggal_mulai)
                        <div class="flex items-center text-gray-600 text-sm">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            {{ \Carbon\Carbon::parse($program->tanggal_mulai)->format('d M Y') }}
                            @if($program->tanggal_selesai)
                            - {{ \Carbon\Carbon::parse($program->tanggal_selesai)->format('d M Y') }}
                            @endif
                        </div>
                        @endif
                    </div>
                    <a href="{{ route('programs.show', $program->slug) }}" 
                       class="inline-flex items-center text-blue-600 font-medium hover:text-blue-700">
                        Lihat Detail
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-8">
            {{ $programs->links() }}
        </div>
        @else
        <div class="text-center py-12">
            <p class="text-gray-600">Belum ada program yang tersedia.</p>
        </div>
        @endif
    </div>
</div>
@endsection