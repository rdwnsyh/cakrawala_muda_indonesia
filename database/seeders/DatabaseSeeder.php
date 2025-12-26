<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\AdminSeeder;
use Database\Seeders\AlumniSeeder;
use Database\Seeders\BeritaSeeder;
use Database\Seeders\JenisProgramSeeder;
use Database\Seeders\PengurusSeeder;
use Database\Seeders\ProgramSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            JenisProgramSeeder::class,
            ProgramSeeder::class,
            AlumniSeeder::class,
            BeritaSeeder::class,
            PengurusSeeder::class,
        ]);
    }
}
