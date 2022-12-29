<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\Relationship;
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

    public function itemsOfneed(){

        // Get The Items of The Needs - Relationship
        return $this->hasMany(ItemsOfNeeds::class);

    }

    public function project(){

        // Get The Project That Owns The Need - Relationship
        return $this->belongsTo(Project::class);
    }

}
