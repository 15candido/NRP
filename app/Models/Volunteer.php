<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;

    const TABLE = 'volunteers';

    protected $table = self::TABLE;

    protected $fillable = [
        'name',
        'slug', 
        'birthdate',
        'email',
        'phone',
        'address',
        'location',
        'postcode',
        'motivation'
    ];

    public static function search($search)
    {
        return empty($search)
        ? static::query()
        : static::query()->where('id', 'like', '%' . $search . '%')
            ->orWhere('name', 'like', '%' . $search . '%');
    }
}
