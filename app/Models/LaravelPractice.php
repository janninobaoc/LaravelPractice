<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class LaravelPractice extends Model
{
    protected $fillable = [
        'name',
        'age',
        'email',
        'address',
        'phone_number',
    ];
    use HasFactory;
}
