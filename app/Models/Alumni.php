<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Alumni extends Model
{
    protected $fillable = [
        'foto',
        'nama',
        'jenis_program_id',
        'testimoni',
    ];

    public function jenisProgram(): BelongsTo
    {
        return $this->belongsTo(JenisProgram::class);
    }
}
