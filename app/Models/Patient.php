<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'active',
    ];

    public function physicians(): BelongsToMany
    {
        return $this->belongsToMany(Physician::class, 'patient_physician', 'patient_id', 'physician_id');
    }
}
