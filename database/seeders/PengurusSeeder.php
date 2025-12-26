<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pengurus;

class PengurusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pengurus = [
            // BPH (Badan Pengurus Harian)
            [
                'nama' => 'Ahmad Fauzi',
                'jabatan' => 'Ketua Umum',
                'divisi' => 'BPH',
                'foto' => 'pengurus/dummy-male-1.jpg',
                'urutan' => 1,
            ],
            [
                'nama' => 'Siti Nurhaliza',
                'jabatan' => 'Sekretaris Umum',
                'divisi' => 'BPH',
                'foto' => 'pengurus/dummy-female-1.jpg',
                'urutan' => 2,
            ],
            [
                'nama' => 'Budi Santoso',
                'jabatan' => 'Bendahara Umum',
                'divisi' => 'BPH',
                'foto' => 'pengurus/dummy-male-2.jpg',
                'urutan' => 3,
            ],

            // Divisi Program
            [
                'nama' => 'Rina Wijaya',
                'jabatan' => 'Koordinator',
                'divisi' => 'Program',
                'foto' => 'pengurus/dummy-female-2.jpg',
                'urutan' => 4,
            ],
            [
                'nama' => 'Dedi Kurniawan',
                'jabatan' => 'Anggota',
                'divisi' => 'Program',
                'foto' => 'pengurus/dummy-male-3.jpg',
                'urutan' => 5,
            ],

            // Divisi Humas
            [
                'nama' => 'Linda Sari',
                'jabatan' => 'Koordinator',
                'divisi' => 'Humas',
                'foto' => 'pengurus/dummy-female-3.jpg',
                'urutan' => 6,
            ],
            [
                'nama' => 'Eko Prasetyo',
                'jabatan' => 'Anggota',
                'divisi' => 'Humas',
                'foto' => 'pengurus/dummy-male-4.jpg',
                'urutan' => 7,
            ],

            // Divisi Keuangan
            [
                'nama' => 'Maya Indah',
                'jabatan' => 'Koordinator',
                'divisi' => 'Keuangan',
                'foto' => 'pengurus/dummy-female-4.jpg',
                'urutan' => 8,
            ],
            [
                'nama' => 'Hendra Gunawan',
                'jabatan' => 'Anggota',
                'divisi' => 'Keuangan',
                'foto' => 'pengurus/dummy-male-5.jpg',
                'urutan' => 9,
            ],

            // Divisi Media
            [
                'nama' => 'Putri Amelia',
                'jabatan' => 'Koordinator',
                'divisi' => 'Media',
                'foto' => 'pengurus/dummy-female-5.jpg',
                'urutan' => 10,
            ],
            [
                'nama' => 'Rifki Ramadan',
                'jabatan' => 'Anggota',
                'divisi' => 'Media',
                'foto' => 'pengurus/dummy-male-6.jpg',
                'urutan' => 11,
            ],

            // Divisi Acara
            [
                'nama' => 'Dina Marlina',
                'jabatan' => 'Koordinator',
                'divisi' => 'Acara',
                'foto' => 'pengurus/dummy-female-6.jpg',
                'urutan' => 12,
            ],
            [
                'nama' => 'Arief Hidayat',
                'jabatan' => 'Anggota',
                'divisi' => 'Acara',
                'foto' => 'pengurus/dummy-male-7.jpg',
                'urutan' => 13,
            ],
        ];

        foreach ($pengurus as $data) {
            Pengurus::create($data);
        }
    }
}
