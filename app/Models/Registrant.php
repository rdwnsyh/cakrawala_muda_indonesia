<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Registrant extends Model
{
    protected $fillable = [
        'program_id',
        'full_name',
        'email',
        'phone',
        'age',
        'emergency_contact',
        'motivation',
        'status',
        'admin_notes',
    ];

    protected $casts = [
        'age' => 'integer',
    ];

    public function program(): BelongsTo
    {
        return $this->belongsTo(Program::class);
    }
}
