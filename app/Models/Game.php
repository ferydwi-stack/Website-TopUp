<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function diamonds()
    {
        return $this->hasMany(Diamond::class);
    }

    public function activeDiamonds()
    {
        return $this->diamonds()->where('is_active', true);
    }
}
