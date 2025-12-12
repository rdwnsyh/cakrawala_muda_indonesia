<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name' => 'Admin Cakrawala Muda',
            'email' => 'admin@cakrawalamuda.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
        ]);
    }
}
