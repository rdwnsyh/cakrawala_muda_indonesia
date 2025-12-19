<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JenisProgram extends Model
{
    protected $fillable = [
        'nama',
        'poster',
        'status',
    ];

    public function programs(): HasMany
    {
        return $this->hasMany(Program::class);
    }
}
