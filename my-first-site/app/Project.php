<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //Protection against MassAssignment Attack
    protected $fillable = [ //witch fields are ok to Mass Assign
        'title',
        'description'
    ];

    //fields that NOT be mass assigned
    protected $guarded = [

    ];

    /**
     * App\Project::first()->tasks; // Eloquent magic, calling like a attribute
     *
     * App\Project::first()->tasks->last();
     * */
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
