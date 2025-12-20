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
        Schema::table('programs', function (Blueprint $table) {
            $table->string('galeri_1')->nullable()->after('poster');
            $table->string('galeri_2')->nullable()->after('galeri_1');
            $table->string('galeri_3')->nullable()->after('galeri_2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('programs', function (Blueprint $table) {
            $table->dropColumn(['galeri_1', 'galeri_2', 'galeri_3']);
        });
    }
};
