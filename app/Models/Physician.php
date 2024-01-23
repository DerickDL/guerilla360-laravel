<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Physician extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'active',
    ];

    public function patients(): BelongsToMany
    {
        return $this->belongsToMany(Patient::class, 'patient_physician', 'patient_id', 'physician_id');
    }
}
