<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeMenuDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category_id',
        'end_point',
        'description',
        'image'
    ];

    public function mainMenu()
    {
        return $this->belongsTo(HomeMenu::class,'category_id');
    }
}
