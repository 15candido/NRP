<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Need extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'start',
        'end',
    ];

    public function projects()
    {
        return $this->belongsToMany(Project::class)->withPivot('quantity', 'note');
    }

    public function items()
    {
        return $this->belongsToMany(Item::class)->withPivot('quantity', 'note');
    }
}
