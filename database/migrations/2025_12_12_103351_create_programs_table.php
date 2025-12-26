<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_program'); // travel, volunteer, education
            $table->string('nama_program');
            $table->string('slug')->unique()->index();
            $table->string('lokasi')->nullable();
            $table->string('poster');
            $table->text('keterangan');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->enum('status', ['aktif', 'segera', 'tutup'])->default('aktif');
            $table->text('link_buku_panduan')->nullable();
            $table->text('link_daftar_sekarang')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
