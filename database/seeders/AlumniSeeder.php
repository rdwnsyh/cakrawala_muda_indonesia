<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumni;

class AlumniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alumnis = [
            [
                'foto' => 'alumni/alumni-1.jpg',
                'nama' => 'Rizki Pratama',
                'program_id' => 1, // Volunteer Teaching Lombok 2025
                'testimoni' => 'Pengalaman mengajar di Lombok Timur sungguh luar biasa! Saya belajar banyak hal tentang kehidupan, kesederhanaan, dan ketulusan anak-anak desa. Program ini mengubah cara pandang saya tentang pendidikan dan kehidupan. Terima kasih CMI!',
            ],
            [
                'foto' => 'alumni/alumni-2.jpg',
                'nama' => 'Sari Widyanti',
                'program_id' => 2, // Medical Camp Papua 2025
                'testimoni' => 'Menjadi bagian dari Medical Camp Papua adalah impian yang terwujud. Melihat senyum lega masyarakat Papua setelah mendapat pengobatan gratis membuat semua perjuangan terasa sangat bermakna. Pengalaman yang tidak akan pernah saya lupakan!',
            ],
            [
                'foto' => 'alumni/alumni-3.jpg',
                'nama' => 'Budi Hermawan',
                'program_id' => 3, // Community Development Sulawesi Tengah
                'testimoni' => 'Program Community Development di Palu mengajarkan saya tentang resilience dan kekuatan masyarakat Indonesia. Bekerja bersama warga lokal membangun ekonomi mereka adalah pengalaman yang sangat berharga. Saya pulang dengan banyak pelajaran hidup!',
            ],
            [
                'foto' => 'alumni/alumni-4.jpg',
                'nama' => 'Dewi Lestari',
                'program_id' => 4, // Volunteer Teaching Maluku Utara
                'testimoni' => 'Mengajar di pulau-pulau Maluku Utara membuka mata saya tentang pentingnya pemerataan pendidikan di Indonesia. Anak-anak di sana sangat semangat belajar meskipun keterbatasan fasilitas. Mereka adalah inspirasi saya untuk terus berkontribusi!',
            ],
            [
                'foto' => 'alumni/alumni-5.jpg',
                'nama' => 'Agung Setiawan',
                'program_id' => 5, // Medical Camp Nusa Tenggara Timur
                'testimoni' => 'Medical Camp di NTT adalah perjalanan yang mengubah hidup saya. Sebagai mahasiswa kedokteran, saya belajar banyak tentang kesehatan masyarakat dan empati. CMI memberikan platform terbaik untuk berbagi dan belajar. Sangat recommended!',
            ],
        ];

        foreach ($alumnis as $data) {
            Alumni::create($data);
        }
    }
}
