<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Founders extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'witness',
        'image'
    ];
}
