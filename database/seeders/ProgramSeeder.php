<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Program;
use Illuminate\Support\Str;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $programs = [
            [
                'jenis_program_id' => 1, // Cakrawala Muda 1
                'nama_program' => 'Volunteer Teaching Lombok 2025',
                'slug' => Str::slug('Volunteer Teaching Lombok 2025'),
                'lokasi' => 'Lombok Timur, NTB',
                'poster' => 'programs/vt-lombok-2025.jpg',
                'galeri_1' => 'programs/galeri/vt-lombok-1.jpg',
                'galeri_2' => 'programs/galeri/vt-lombok-2.jpg',
                'galeri_3' => 'programs/galeri/vt-lombok-3.jpg',
                'keterangan' => '<p>Program Volunteer Teaching di Lombok Timur adalah kesempatan emas bagi kamu yang ingin berkontribusi dalam dunia pendidikan. Selama 2 minggu, kamu akan mengajar anak-anak SD dan SMP di desa-desa terpencil.</p><p>Kamu akan tinggal bersama masyarakat lokal, merasakan kehidupan mereka, dan memberikan dampak nyata bagi pendidikan anak-anak Indonesia. Program ini cocok untuk mahasiswa dan fresh graduate yang ingin mengembangkan diri sambil membantu sesama.</p>',
                'tanggal_mulai' => '2025-02-15',
                'tanggal_selesai' => '2025-02-28',
                'status' => 'aktif',
                'link_buku_panduan' => 'https://drive.google.com/file/d/example-vt-lombok',
                'link_daftar_sekarang' => 'https://forms.gle/example-vt-lombok',
            ],
            [
                'jenis_program_id' => 2, // Cakrawala Muda 2
                'nama_program' => 'Medical Camp Papua 2025',
                'slug' => Str::slug('Medical Camp Papua 2025'),
                'lokasi' => 'Jayapura, Papua',
                'poster' => 'programs/mc-papua-2025.jpg',
                'galeri_1' => 'programs/galeri/mc-papua-1.jpg',
                'galeri_2' => 'programs/galeri/mc-papua-2.jpg',
                'galeri_3' => 'programs/galeri/mc-papua-3.jpg',
                'keterangan' => '<p>Medical Camp Papua adalah program kesehatan gratis untuk masyarakat Papua yang membutuhkan. Tim medis profesional dan volunteer akan memberikan pemeriksaan kesehatan, pengobatan, dan penyuluhan kesehatan kepada ribuan warga.</p><p>Program ini terbuka untuk mahasiswa kesehatan, dokter muda, dan siapapun yang memiliki passion di bidang kesehatan. Jadilah bagian dari perubahan untuk Indonesia Sehat!</p>',
                'tanggal_mulai' => '2025-03-10',
                'tanggal_selesai' => '2025-03-24',
                'status' => 'aktif',
                'link_buku_panduan' => 'https://drive.google.com/file/d/example-mc-papua',
                'link_daftar_sekarang' => 'https://forms.gle/example-mc-papua',
            ],
            [
                'jenis_program_id' => 3, // Cakrawala Muda 3
                'nama_program' => 'Community Development Sulawesi Tengah',
                'slug' => Str::slug('Community Development Sulawesi Tengah'),
                'lokasi' => 'Palu, Sulawesi Tengah',
                'poster' => 'programs/comdev-sulteng-2025.jpg',
                'galeri_1' => 'programs/galeri/comdev-sulteng-1.jpg',
                'galeri_2' => 'programs/galeri/comdev-sulteng-2.jpg',
                'galeri_3' => 'programs/galeri/comdev-sulteng-3.jpg',
                'keterangan' => '<p>Program Community Development di Sulawesi Tengah fokus pada pemberdayaan ekonomi masyarakat pasca bencana. Kamu akan terlibat dalam pelatihan keterampilan, pendampingan UMKM, dan pembangunan infrastruktur desa.</p><p>Selama 3 bulan, kamu akan tinggal dan bekerja bersama masyarakat untuk membangun ekonomi lokal yang berkelanjutan. Program ini cocok untuk mahasiswa dari berbagai jurusan yang ingin belajar pemberdayaan masyarakat secara langsung.</p>',
                'tanggal_mulai' => '2025-04-01',
                'tanggal_selesai' => '2025-06-30',
                'status' => 'segera',
                'link_buku_panduan' => 'https://drive.google.com/file/d/example-comdev-sulteng',
                'link_daftar_sekarang' => 'https://forms.gle/example-comdev-sulteng',
            ],
            [
                'jenis_program_id' => 1, // Cakrawala Muda 1
                'nama_program' => 'Volunteer Teaching Maluku Utara',
                'slug' => Str::slug('Volunteer Teaching Maluku Utara'),
                'lokasi' => 'Ternate, Maluku Utara',
                'poster' => 'programs/vt-malut-2025.jpg',
                'galeri_1' => 'programs/galeri/vt-malut-1.jpg',
                'galeri_2' => 'programs/galeri/vt-malut-2.jpg',
                'galeri_3' => 'programs/galeri/vt-malut-3.jpg',
                'keterangan' => '<p>Program Volunteer Teaching di Maluku Utara mengajak kamu untuk mengajar di pulau-pulau terpencil yang akses pendidikannya masih terbatas. Kamu akan mengajar berbagai mata pelajaran dengan metode kreatif dan menyenangkan.</p><p>Selain mengajar, kamu juga akan belajar budaya lokal, bahasa daerah, dan kehidupan masyarakat pesisir. Ini bukan hanya tentang memberi, tapi juga tentang belajar dan tumbuh bersama.</p>',
                'tanggal_mulai' => '2025-07-01',
                'tanggal_selesai' => '2025-07-21',
                'status' => 'segera',
                'link_buku_panduan' => 'https://drive.google.com/file/d/example-vt-malut',
                'link_daftar_sekarang' => 'https://forms.gle/example-vt-malut',
            ],
            [
                'jenis_program_id' => 2, // Cakrawala Muda 2
                'nama_program' => 'Medical Camp Nusa Tenggara Timur',
                'slug' => Str::slug('Medical Camp Nusa Tenggara Timur'),
                'lokasi' => 'Kupang, NTT',
                'poster' => 'programs/mc-ntt-2025.jpg',
                'galeri_1' => 'programs/galeri/mc-ntt-1.jpg',
                'galeri_2' => 'programs/galeri/mc-ntt-2.jpg',
                'galeri_3' => 'programs/galeri/mc-ntt-3.jpg',
                'keterangan' => '<p>Medical Camp Nusa Tenggara Timur memberikan layanan kesehatan gratis kepada masyarakat di daerah terpencil NTT. Program ini meliputi pemeriksaan kesehatan umum, gigi, mata, dan pemberian obat gratis.</p><p>Tim medis dan volunteer akan bekerja sama melayani ribuan warga yang memiliki akses kesehatan terbatas. Bergabunglah untuk membawa harapan sehat bagi Indonesia Timur!</p>',
                'tanggal_mulai' => '2025-08-15',
                'tanggal_selesai' => '2025-08-29',
                'status' => 'aktif',
                'link_buku_panduan' => 'https://drive.google.com/file/d/example-mc-ntt',
                'link_daftar_sekarang' => 'https://forms.gle/example-mc-ntt',
            ],
            [
                'jenis_program_id' => 3, // Cakrawala Muda 3
                'nama_program' => 'Community Development Aceh',
                'slug' => Str::slug('Community Development Aceh'),
                'lokasi' => 'Banda Aceh, Aceh',
                'poster' => 'programs/comdev-aceh-2025.jpg',
                'galeri_1' => 'programs/galeri/comdev-aceh-1.jpg',
                'galeri_2' => 'programs/galeri/comdev-aceh-2.jpg',
                'galeri_3' => 'programs/galeri/comdev-aceh-3.jpg',
                'keterangan' => '<p>Program Community Development di Aceh fokus pada pemberdayaan masyarakat pesisir melalui pelatihan budidaya ikan, kerajinan tangan, dan manajemen usaha. Kamu akan tinggal dan bekerja langsung dengan nelayan dan pengrajin lokal.</p><p>Selama 2 bulan, kamu akan membantu mengembangkan ekonomi kreatif dan berkelanjutan di Aceh. Program ini cocok untuk yang passionate di bidang ekonomi dan pemberdayaan masyarakat.</p>',
                'tanggal_mulai' => '2025-09-01',
                'tanggal_selesai' => '2025-10-31',
                'status' => 'segera',
                'link_buku_panduan' => 'https://drive.google.com/file/d/example-comdev-aceh',
                'link_daftar_sekarang' => 'https://forms.gle/example-comdev-aceh',
            ],
        ];

        foreach ($programs as $data) {
            Program::create($data);
        }
    }
}
