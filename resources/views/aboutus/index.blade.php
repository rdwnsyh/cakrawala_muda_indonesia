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
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                About <span class="text-blue-600">Us</span>
            </h2>
            <div class="w-24 h-1.5 bg-blue-600 mx-auto rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Gambar Ilustrasi -->
            <div class="order-2 lg:order-1">
                <img src="https://images.unsplash.com/photo-1522071820081-009f2fa9a20d?ixlib=rb-4.0.3&auto=format&fit=crop&q=80&w=800" 
                     alt="Tim Cakrawala Muda Indonesia" 
                     class="w-full rounded-3xl shadow-2xl object-cover">
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
                <div class="pt-6">
                    <a href="#visi-misi" class="inline-flex items-center gap-3 text-blue-600 font-bold text-lg hover:text-blue-800 transition">
                        Lihat Visi & Misi Kami
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section 3: Visi Misi -->
<div id="visi-misi" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Visi & <span class="text-blue-600">Misi</span>
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
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Pengurus <span class="text-blue-600">Inti</span>
            </h2>
            <div class="w-24 h-1.5 bg-blue-600 mx-auto rounded-full"></div>
            <p class="text-xl text-gray-600 mt-6 max-w-3xl mx-auto">
                Tim inti yang berdedikasi penuh untuk mewujudkan visi Cakrawala Muda Indonesia
            </p>
        </div>

        <!-- Grid Pengurus (contoh 6 orang, bisa ditambah/dikurang) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
            <!-- Pengurus 1 -->
            <div class="group text-center">
                <div class="relative overflow-hidden rounded-3xl shadow-xl mb-6">
                    <img src="https://images.unsplash.com/photo-1557862921-37829c790f19?ixlib=rb-4.0.3&auto=format&fit=crop&q=80&w=800" 
                         alt="Nama Pengurus" 
                         class="w-full h-96 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 text-white">
                        <h4 class="text-2xl font-bold">Ahmad Rizki</h4>
                        <p class="text-lg">Pendiri & Ketua Umum</p>
                    </div>
                </div>
                <p class="text-gray-600 italic">"Membangun Indonesia dimulai dari pemuda yang berani bermimpi besar."</p>
            </div>

            <!-- Pengurus 2 -->
            <div class="group text-center">
                <div class="relative overflow-hidden rounded-3xl shadow-xl mb-6">
                    <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-4.0.3&auto=format&fit=crop&q=80&w=800" 
                         alt="Nama Pengurus" 
                         class="w-full h-96 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 text-white">
                        <h4 class="text-2xl font-bold">Siti Nurhaliza</h4>
                        <p class="text-lg">Wakil Ketua</p>
                    </div>
                </div>
                <p class="text-gray-600 italic">"Setiap pemuda berhak mendapatkan kesempatan untuk berkembang."</p>
            </div>

            <!-- Pengurus 3 -->
            <div class="group text-center">
                <div class="relative overflow-hidden rounded-3xl shadow-xl mb-6">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&q=80&w=800" 
                         alt="Nama Pengurus" 
                         class="w-full h-96 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 text-white">
                        <h4 class="text-2xl font-bold">Budi Santoso</h4>
                        <p class="text-lg">Sekretaris Jenderal</p>
                    </div>
                </div>
                <p class="text-gray-600 italic">"Kolaborasi adalah kunci perubahan besar."</p>
            </div>

            <!-- Tambahkan pengurus lain jika perlu -->
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="py-20 bg-gradient-to-r from-blue-600 to-indigo-700 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">
            Bergabunglah Bersama Kami
        </h2>
        <p class="text-xl mb-10 max-w-3xl mx-auto">
            Jadilah bagian dari perjalanan menginspirasi Indonesia melalui aksi pemuda
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-6">
            <a href="{{ route('programs.index') }}" class="bg-white text-blue-700 px-10 py-5 rounded-2xl font-bold text-xl hover:shadow-2xl hover:scale-105 transition">
                Lihat Program Kami
            </a>
            <a href="https://wa.me/6281234567890?text=Halo, saya ingin bergabung dengan Cakrawala Muda Indonesia" 
               target="_blank"
               class="bg-green-500 hover:bg-green-600 px-10 py-5 rounded-2xl font-bold text-xl hover:shadow-2xl hover:scale-105 transition">
                Hubungi Kami via WhatsApp
            </a>
        </div>
    </div>
</div>
@endsection