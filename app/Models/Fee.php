<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    use HasFactory;

    protected $fillable = [
        'agent_id',
        'amount',
        'percentage',
        'card_fees'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'agent_id');
    }
}
