<?php

namespace App\Http\Controllers;

use App\Project;

class ProjectController extends Controller
{
    public function index()
    {
        //$projects = \App\Projects::all();

        $projects = Project::all();

        //return $projects;//json

        //return view('projects.index');
        //return view('projects.index', ['projects' => $projects]);
        return view('projects.index', compact('projects')); //same as upS
    }

    public function create()
    {
        return view("projects.create");
    }

    public function store() //  \App\Http\Middleware\VerifyCsrfToken::class, Middleeware Kernel.php
    {
        //return request()->all();

        /*$project = new Project();
        $project->title = request("title");
        $project->description = request("description");

        $project->save();*/

        /*Project::create([ // MassAssignmentException
            'title' => request("title"),
            'description' => request("description")
        ]);*/

        $attributes = request()->validate([
            'title' => ['required', 'min:3'],
            'description' => 'required'
        ]);

        //Project::create(request(['title', 'description']));
        Project::create($attributes);

        return redirect('/projects');
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id); // default 404 page if fail
        return view('projects.edit', compact('project'));
    }

    /*public function show($id)
    {
        $project = Project::findOrFail($id);

        return $project; //json


        return view('projects.show', compact('project'));
    }*/

    public function show(Project $project) //Route model binding with wildcard $id
    {
        return view('projects.show', compact('project'));
    }

    /*public function update($id)
    {
        //dd(request()->all());
        $project = Project::findOrFail($id);
        $project->title = request("title");
        $project->description = request("description");

        $project->save();

        return redirect('/projects');
    }*/

    public function update(Project $project)
    {
       $project->update(request(['title', 'description'])); //fillable attention

        return redirect('/projects');
    }

    public function destroy($id)
    {
        Project::findOrFail($id)->delete();
        return redirect('/projects');
    }
}
