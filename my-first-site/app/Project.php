<?php

namespace App;

use App\Events\ProjectCreated;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

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
    protected $dispatchesEvents = [
        'created' => ProjectCreated::class //Eloquent fire when create a new project
    ];

    /*protected static function boot() // using events
    {
        parent::boot();

        static::created(function($project){
            Mail::to($project->owner->email)->send(
                new ProjectCreated($project)
            );
        });
    }*/


    public function owner() //hasOne
    {
        return $this->belongsTo(User::class);
    }

    /**
     * App\Project::first()->tasks; // Eloquent magic, calling like a attribute
     *
     * App\Project::first()->tasks->last();
     * */
    public function tasks() //HasMany
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
