<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'url',
        'category_id',
        'video',
        'thumbnail_image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
