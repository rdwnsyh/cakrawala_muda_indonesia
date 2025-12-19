<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = [
        'jenis_berita',
        'title',
        'slug',
        'penulis',
        'tanggal',
        'gambar_berita',
        'body',
    ];

    protected $casts = [
        'tanggal' => 'date',
    ];
}
