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
        Schema::create('registrants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('program_id')->constrained('programs')->onDelete('cascade');
            $table->string('full_name');
            $table->string('email')->index();
            $table->string('phone');
            $table->integer('age');
            $table->string('emergency_contact');
            $table->text('motivation');
            $table->enum('status', ['pending', 'confirmed', 'rejected', 'canceled'])->default('pending')->index();
            $table->text('admin_notes')->nullable();
            $table->timestamps();
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrants');
    }
};
