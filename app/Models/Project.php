<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'short_description',
        'description',
        'visible',
        'image',
        'hero_image',
        'start',
        'end'
    ];

    public function completedTasks()
    {
        return $this->hasMany(projectCompletedTask::class, 'project_id');
    }

    public function collaborator()
    {
        return $this->belongsToMany(
            Person::class,
            'person_project',
            'person_id',
            'project_id'
        );
    }

    public function needs()
    {
        return $this->belongsToMany(Need::class)->withPivot('quantity', 'note');
    }
}
