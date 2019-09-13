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
        $title = request("title");
        $description = \request("description");

        $project = new Project($title, $description);

        $project->save();
        return ;
    }
}
