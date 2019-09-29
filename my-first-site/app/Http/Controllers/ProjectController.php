<?php

namespace App\Http\Controllers;

use App\Project;

class ProjectController extends Controller
{

    /**
     * ProjectController constructor.
     */
    public function __construct()
    {
        // some actions
        //$this->middleware('auth')->only(['index', 'create', 'store', 'update', 'destroy', 'show', 'edit']);
        //except
        //$this->middleware('auth')->except(['index']);
        $this->middleware('auth'); // all actions

    }

    public function index()
    {
        //$projects = \App\Projects::all();

        //$projects = Project::all();

        //$projects = Project::where('owner_id', auth()->id())->get();
        //$projects = auth()->user->projects();

        //return $projects;//json

        //return view('projects.index');
        //return view('projects.index', ['projects' => $projects]);
        //return view('projects.index', compact('projects')); //same as upS
        return view('projects.index', [
            'projects' => auth()->user()->projects
        ]);
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

        $attributes['owner_id'] = auth()->id();

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
        /*if ($project->owner_id !== auth()->id()) {
            abort(403);
        }*/
        /*if(\Gate::denies('view', $project)){
            abort(403);
        }*/
        //abort_if($project->owner_id !== auth()->id(), 403); //laravel helper
        //abort_if(!$project->user()->owns($project), 403);//
        //abort_unless($project->user()->owns($project), 403);


        //abort_if(\Gate::denies('view', $project), 403); //laravel GATE helper
        //abort_unless(\Gate::allows('view', $project), 403); //laravel GATE helper

        //see Routes middleware //php artisan route:list
        $this->authorize('view', $project); //ProjectPolicy binding AuthServiceProvider

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
        $this->authorize('update', $project);
        //see Routes middleware

       $project->update(request(['title', 'description'])); //fillable attention

        return redirect('/projects');
    }

    /*public function destroy($id)
    {
        Project::findOrFail($id)->delete();
        return redirect('/projects');
    }*/

    public function destroy(Project $project)
    {
        $this->authorize('destroy', $project);
        //see Routes middleware

        $project->delete();

        return redirect('/projects');
    }
}
