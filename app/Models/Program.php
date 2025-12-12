<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Program extends Model
{
    protected $fillable = [
        'jenis_program',
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
}
