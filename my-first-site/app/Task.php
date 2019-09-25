<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    protected $fillable = [
        'completed',
        'description',
        'project_id'
    ];

    protected $guarded = [

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

    public function complete(bool $completed = true)
    {

        $this->update([
            'completed' => $completed
        ]);
    }

    public function incomplete()
    {

        $this->complete(false);
    }
}
