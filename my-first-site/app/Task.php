<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    protected $fillable = [
        'completed'
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     *
     *  App\Task::first()->project;
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
