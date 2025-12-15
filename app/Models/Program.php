<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Program extends Model
{
    protected $fillable = [
        'jenis_program',
        'poster_jenis_program', // Kolom baru
        'nama_program',
        'slug',
        'lokasi',
        'poster',
        'keterangan',
        'tanggal_mulai',
        'tanggal_selesai',
        'status',
    ];

    protected $casts = [
        'tanggal_mulai' => 'date',
        'tanggal_selesai' => 'date',
    ];

    public function registrants(): HasMany
    {
        return $this->hasMany(Registrant::class);
    }
    
    // Helper method untuk mendapatkan jenis program unik
    public static function getJenisProgramUnik()
    {
        return self::select('jenis_program', 'poster_jenis_program')
            ->distinct()
            ->whereNotNull('jenis_program')
            ->get()
            ->groupBy('jenis_program')
            ->map(function ($items) {
                return [
                    'jenis_program' => $items->first()->jenis_program,
                    'poster_jenis_program' => $items->first()->poster_jenis_program
                ];
            })
            ->values();
    }
}