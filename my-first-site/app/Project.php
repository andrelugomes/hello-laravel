<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //Protection against MassAssignment Attack
    protected $fillable = [ //witch fields are ok to Mass Assign
        'title',
        'description',
        'owner_id'
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

    public function addTask($task) : Task
    {
        /*return Task::create([
            'project_id' => $this->id,
            'description' => $description
        ]);*/

        //Eloquent way apply project_id automatically
        return $this->tasks()->create($task);
    }
}
