<?php

namespace App\Http\Controllers;

use App\Project;
use App\Task;
use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{
    public function update(Task $task){
        /*$task->update([
           'completed' => \request()->has('completed')
        ]);*/

        //$task->complete(request()->has('completed'));

        /*if(request()->has('completed')){
            $task->complete();
        }else {
            $task->incomplete();
        }*/

        $method = request()->has('completed') ? 'complete' : 'incomplete';

        $task->$method();

        return back();
    }

    public function store(Project $project)
    {
        $attributes = request()->validate(['description' => 'required|max:255']);
        /*Task::create([
            'project_id' => $project->id,
            'description' => \request('description')
        ]);*/

        $project->addTask($attributes);

        return back();
    }
}
