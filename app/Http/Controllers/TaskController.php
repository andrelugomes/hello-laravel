<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() 
    {
    	$tasks = [
		"Go to the market",
		"Go to the gym",
		"Code software"
	];

    return view('tasks', ['tasks' => $tasks]);

    }
}
