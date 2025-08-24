<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopUpTransaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'diamond_id',
        'game_id',
        'amount',
        'status',
        'payment_code',
        'payment_method'
    ];

    public function diamond()
    {
        return $this->belongsTo(Diamond::class);
    }

    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}
