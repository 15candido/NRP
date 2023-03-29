<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'abstract',
        'description',
        'mission',
        'mission_label',
        'vision',
        'valeu',
        'image'
    ];
}
