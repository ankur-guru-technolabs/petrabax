<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'role_id',
        'contact',
        'password',
        'permission'
    ];

    public function role()
    {
        return $this->belongsTo(Role::class,'role_id');
    }
}
