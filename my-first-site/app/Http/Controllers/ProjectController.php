<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

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
}
