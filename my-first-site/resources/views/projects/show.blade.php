@extends('layout')

@section('title','Projects')

@section('content')

    <h1> {{ $project->title }}</h1>

    <div class="content">
        {{ $project->description }}
    </div>

    <div>
        <a href="/projects/{{ $project->id }}/edit">Edit</a>
    </div>

@endsection
