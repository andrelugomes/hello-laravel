@extends('layout')

@section('title','Projects')

@section('content')

    <h1>Projects</h1>

    <form action="/projects" method="POST">

        {{ csrf_field() }} //\App\Http\Middleware\VerifyCsrfToken::class, Middleeware Kernel.php

        <div>
            <input type="text" name="title" placeholder="Project title">
        </div>

        <div>
            <textarea name="description" placeholder="Project description"></textarea>
        </div>

        <div>
            <button type="submit">Create Project</button>
        </div>
    </form>

@endsection
