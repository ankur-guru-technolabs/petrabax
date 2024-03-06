<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'commission_name',
        'agent_id',
        'commission',
        'commission_type'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
