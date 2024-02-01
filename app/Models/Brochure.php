<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brochure extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'image',
        'pdf',
        'order',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
