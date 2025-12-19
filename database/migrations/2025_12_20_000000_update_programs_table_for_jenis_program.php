<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\Models\JenisProgram;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Step 1: Tambah kolom jenis_program_id sebagai nullable terlebih dahulu (jika belum ada)
        if (!Schema::hasColumn('programs', 'jenis_program_id')) {
            Schema::table('programs', function (Blueprint $table) {
                $table->unsignedBigInteger('jenis_program_id')->nullable()->after('id');
            });
        }

        // Step 2: Migrate data dari kolom lama ke tabel jenis_programs dan update programs
        if (Schema::hasColumn('programs', 'jenis_program')) {
            $programs = DB::table('programs')->get();
            
            foreach ($programs as $program) {
                if ($program->jenis_program) {
                    // Cari atau buat jenis program
                    $jenisProgram = JenisProgram::firstOrCreate(
                        ['nama' => $program->jenis_program],
                        [
                            'poster' => $program->poster_jenis_program ?? null,
                            'status' => 'aktif'
                        ]
                    );
                    
                    // Update program dengan jenis_program_id
                    DB::table('programs')
                        ->where('id', $program->id)
                        ->update(['jenis_program_id' => $jenisProgram->id]);
                }
            }
        }

        // Step 3: Tambahkan foreign key constraint (jika belum ada)
        $foreignKeys = DB::select("
            SELECT CONSTRAINT_NAME 
            FROM information_schema.KEY_COLUMN_USAGE 
            WHERE TABLE_SCHEMA = DATABASE() 
            AND TABLE_NAME = 'programs' 
            AND CONSTRAINT_NAME = 'programs_jenis_program_id_foreign'
        ");
        
        if (empty($foreignKeys)) {
            Schema::table('programs', function (Blueprint $table) {
                $table->foreign('jenis_program_id')
                    ->references('id')
                    ->on('jenis_programs')
                    ->onDelete('cascade');
            });
        }

        // Step 4: Hapus kolom lama (jika masih ada)
        Schema::table('programs', function (Blueprint $table) {
            if (Schema::hasColumn('programs', 'jenis_program')) {
                $table->dropColumn('jenis_program');
            }
            if (Schema::hasColumn('programs', 'poster_jenis_program')) {
                $table->dropColumn('poster_jenis_program');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('programs', function (Blueprint $table) {
            // Kembalikan kolom lama
            $table->string('jenis_program')->nullable();
            $table->string('poster_jenis_program')->nullable();
        });

        // Migrate data kembali
        $programs = DB::table('programs')->get();
        
        foreach ($programs as $program) {
            if ($program->jenis_program_id) {
                $jenisProgram = JenisProgram::find($program->jenis_program_id);
                if ($jenisProgram) {
                    DB::table('programs')
                        ->where('id', $program->id)
                        ->update([
                            'jenis_program' => $jenisProgram->nama,
                            'poster_jenis_program' => $jenisProgram->poster
                        ]);
                }
            }
        }

        Schema::table('programs', function (Blueprint $table) {
            // Hapus foreign key
            $table->dropForeign(['jenis_program_id']);
            $table->dropColumn('jenis_program_id');
        });
    }
};
