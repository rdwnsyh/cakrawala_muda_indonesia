<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JenisProgram;

class JenisProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jenisPrograms = [
            [
                'nama' => 'Cakrawala Muda',
                'poster' => 'jenis_program/volunteer-teaching.jpg',
                'status' => 'aktif',
            ],
            [
                'nama' => 'Cakrawala Volunteering on the Weekend',
                'poster' => 'jenis_program/medical-camp.jpg',
                'status' => 'segera',
            ],
            [
                'nama' => 'Sehari Jadi Volunteer',
                'poster' => 'jenis_program/community-development.jpg',
                'status' => 'segera',
            ],
            [
                'nama' => 'Aku Seorang Cakra',
                'poster' => 'jenis_program/community-development.jpg',
                'status' => 'tutup',
            ],
        ];

        foreach ($jenisPrograms as $data) {
            JenisProgram::create($data);
        }
    }
}
