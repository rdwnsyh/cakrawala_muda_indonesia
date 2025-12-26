<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Alumni extends Model
{
    protected $fillable = [
        'foto',
        'nama',
        'program_id',
        'testimoni',
    ];

    public function program(): BelongsTo
    {
        return $this->belongsTo(Program::class);
    }
}
