<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'main_category_id',
    ];

    public function mainCategory()
    {
        return $this->belongsTo(Category::class, 'main_category_id');
    }

}
