<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderBrochure extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',		
        'last_name',
        'address',
        'city',
        'suite',
        'state',
        'country',
        'email',
        'phone_no',
        'remark',
        'english_count',
        'spanish_count'		
    ];
}
