<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function needs(){

        // Get The Items of The Needs - Relationship
        return $this->belongsToMany(Need::class);
    }

}
