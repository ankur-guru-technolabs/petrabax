<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'code',
        'category_id',
        'user_type',
        'max_discount',
        'discount_type',
        'percentage_discount',
        'price_discount',
        'start_date',
        'end_date'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
