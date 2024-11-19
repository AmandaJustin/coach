<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Coach extends Model
{
    protected $fillable = [
        'nome'
    ];
    public function Pokemon(): HasMany
    {
        return $this->hasMany(Pokemon::class);
    }
}
