<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Need extends Model
{
    use HasFactory;

    const TABLE = 'needs';

    protected $table = self::TABLE;

    protected $fillable = [

        'project_id',
        'title', 
        'context',
        'total',
        'deadline',
    ];

    public function projects(){

        // Get The Items of The Needs - Relationship
        return $this->belongsToMany(Project::class);
    }

}
