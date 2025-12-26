<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Berita;
use Illuminate\Support\Str;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $beritas = [
            [
                'jenis_berita' => 'Pengumuman',
                'title' => 'Pendaftaran Volunteer Teaching 2025 Dibuka',
                'slug' => Str::slug('Pendaftaran Volunteer Teaching 2025 Dibuka'),
                'penulis' => 'Admin CMI',
                'tanggal' => '2025-01-10',
                'gambar_berita' => 'berita/volunteer-teaching-2025.jpg',
                'body' => '<p>Cakrawala Muda Indonesia membuka pendaftaran untuk program Volunteer Teaching 2025. Program ini akan dilaksanakan di berbagai daerah terpencil di Indonesia untuk membantu meningkatkan kualitas pendidikan.</p><p>Pendaftaran dibuka mulai 15 Januari hingga 15 Februari 2025. Untuk informasi lebih lanjut, silakan kunjungi website kami atau hubungi kontak yang tertera.</p><p>Jangan lewatkan kesempatan emas ini untuk berkontribusi bagi pendidikan Indonesia!</p>',
            ],
            [
                'jenis_berita' => 'Kegiatan',
                'title' => 'Pelaksanaan Medical Camp di Lombok Timur',
                'slug' => Str::slug('Pelaksanaan Medical Camp di Lombok Timur'),
                'penulis' => 'Tim Media CMI',
                'tanggal' => '2024-12-20',
                'gambar_berita' => 'berita/medical-camp-lombok.jpg',
                'body' => '<p>Tim Cakrawala Muda Indonesia telah berhasil melaksanakan Medical Camp di Lombok Timur pada 15-20 Desember 2024. Kegiatan ini melayani lebih dari 500 warga dari 5 desa di wilayah tersebut.</p><p>Medical Camp ini meliputi pemeriksaan kesehatan umum, pemberian obat gratis, penyuluhan kesehatan, dan pengobatan ringan. Tim dokter dan relawan memberikan pelayanan terbaik untuk masyarakat.</p><p>Terima kasih kepada seluruh volunteer dan donatur yang telah mendukung kegiatan ini!</p>',
            ],
            [
                'jenis_berita' => 'Prestasi',
                'title' => 'CMI Raih Penghargaan Organisasi Volunteer Terbaik 2024',
                'slug' => Str::slug('CMI Raih Penghargaan Organisasi Volunteer Terbaik 2024'),
                'penulis' => 'Redaksi CMI',
                'tanggal' => '2024-12-15',
                'gambar_berita' => 'berita/penghargaan-2024.jpg',
                'body' => '<p>Cakrawala Muda Indonesia berhasil meraih penghargaan sebagai Organisasi Volunteer Terbaik 2024 dari Kementerian Pemuda dan Olahraga. Penghargaan ini diberikan atas dedikasi dan kontribusi CMI dalam pemberdayaan masyarakat Indonesia.</p><p>Selama tahun 2024, CMI telah melaksanakan lebih dari 15 program volunteer yang menjangkau ribuan masyarakat di berbagai daerah. Program-program tersebut meliputi pendidikan, kesehatan, dan pemberdayaan ekonomi.</p><p>Penghargaan ini menjadi motivasi bagi kami untuk terus berkarya dan memberikan dampak positif bagi Indonesia.</p>',
            ],
            [
                'jenis_berita' => 'Kegiatan',
                'title' => 'Bakti Sosial Ramadhan 1445 H di Sulawesi Selatan',
                'slug' => Str::slug('Bakti Sosial Ramadhan 1445 H di Sulawesi Selatan'),
                'penulis' => 'Ahmad Fauzi',
                'tanggal' => '2024-11-28',
                'gambar_berita' => 'berita/baksos-ramadhan.jpg',
                'body' => '<p>Dalam rangka menyambut bulan suci Ramadhan 1445 H, Cakrawala Muda Indonesia menggelar bakti sosial di Sulawesi Selatan. Kegiatan ini meliputi pembagian paket sembako, santunan anak yatim, dan renovasi masjid.</p><p>Sebanyak 300 paket sembako berhasil disalurkan kepada keluarga prasejahtera di 3 kecamatan. Selain itu, 100 anak yatim menerima santunan pendidikan dan perlengkapan sekolah.</p><p>Alhamdulillah, kegiatan ini mendapat sambutan hangat dari masyarakat setempat dan pemerintah daerah.</p>',
            ],
            [
                'jenis_berita' => 'Pengumuman',
                'title' => 'Pelatihan Leadership untuk Calon Volunteer CMI',
                'slug' => Str::slug('Pelatihan Leadership untuk Calon Volunteer CMI'),
                'penulis' => 'Siti Nurhaliza',
                'tanggal' => '2025-01-05',
                'gambar_berita' => 'berita/pelatihan-leadership.jpg',
                'body' => '<p>CMI akan mengadakan Pelatihan Leadership untuk calon volunteer yang akan mengikuti program di tahun 2025. Pelatihan ini bertujuan untuk membekali peserta dengan kemampuan kepemimpinan, komunikasi, dan manajemen tim.</p><p>Pelatihan akan dilaksanakan pada 20-22 Januari 2025 di Jakarta. Peserta yang lolos seleksi akan mendapat fasilitas akomodasi, konsumsi, dan sertifikat.</p><p>Pendaftaran dibuka hingga 15 Januari 2025. Buruan daftar sebelum kuota penuh!</p>',
            ],
            [
                'jenis_berita' => 'Kegiatan',
                'title' => 'Community Development di Papua Barat Sukses Dilaksanakan',
                'slug' => Str::slug('Community Development di Papua Barat Sukses Dilaksanakan'),
                'penulis' => 'Budi Santoso',
                'tanggal' => '2024-11-10',
                'gambar_berita' => 'berita/comdev-papua.jpg',
                'body' => '<p>Program Community Development Cakrawala Muda Indonesia di Papua Barat telah sukses dilaksanakan selama 3 bulan (Agustus - Oktober 2024). Program ini fokus pada pemberdayaan ekonomi masyarakat melalui pelatihan keterampilan dan pendampingan usaha.</p><p>Sebanyak 50 kepala keluarga telah mengikuti pelatihan kerajinan tangan, pertanian organik, dan manajemen usaha kecil. Beberapa produk hasil karya masyarakat sudah mulai dipasarkan ke berbagai daerah.</p><p>Terima kasih kepada seluruh volunteer yang telah berjuang di Papua Barat. Kalian luar biasa!</p>',
            ],
            [
                'jenis_berita' => 'Prestasi',
                'title' => 'Volunteer CMI Raih Juara Nasional Kompetisi Inovasi Sosial',
                'slug' => Str::slug('Volunteer CMI Raih Juara Nasional Kompetisi Inovasi Sosial'),
                'penulis' => 'Redaksi CMI',
                'tanggal' => '2024-10-25',
                'gambar_berita' => 'berita/juara-inovasi.jpg',
                'body' => '<p>Membanggakan! Tim volunteer Cakrawala Muda Indonesia berhasil meraih Juara 1 Kompetisi Inovasi Sosial Tingkat Nasional yang diselenggarakan oleh Kementerian Sosial RI.</p><p>Inovasi yang dipresentasikan adalah "Edu-Tech for Remote Areas" yang menggunakan teknologi sederhana untuk meningkatkan akses pendidikan di daerah terpencil tanpa listrik dan internet.</p><p>Prestasi ini membuktikan bahwa anak muda Indonesia mampu menciptakan solusi inovatif untuk permasalahan sosial di negeri ini.</p>',
            ],
            [
                'jenis_berita' => 'Pengumuman',
                'title' => 'Rekrutmen Volunteer Environmental Camp 2025',
                'slug' => Str::slug('Rekrutmen Volunteer Environmental Camp 2025'),
                'penulis' => 'Admin CMI',
                'tanggal' => '2025-01-08',
                'gambar_berita' => 'berita/environmental-camp.jpg',
                'body' => '<p>Cakrawala Muda Indonesia membuka rekrutmen volunteer untuk program Environmental Camp 2025. Program ini akan fokus pada konservasi lingkungan, penanaman pohon, dan edukasi masyarakat tentang pentingnya menjaga kelestarian alam.</p><p>Environmental Camp akan dilaksanakan di beberapa lokasi seperti Kalimantan, Sulawesi, dan Papua pada Maret - Mei 2025. Volunteer akan terlibat langsung dalam kegiatan penanaman mangrove, pembersihan sungai, dan kampanye zero waste.</p><p>Ayo bergabung bersama kami untuk menjaga bumi Indonesia!</p>',
            ],
        ];

        foreach ($beritas as $data) {
            Berita::create($data);
        }
    }
}
