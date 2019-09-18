@extends('layout')

@section('title','Projects')

@section('content')

    <h1>Edit Project</h1>

    <form action="/projects/{{$project->id}}" method="POST">

        {{ csrf_field() }}

        {{ method_field('PATCH') }} {{--gambiarra for the browser--}}

        <div>
            <input type="text" name="title" placeholder="Project title" value="{{ $project->title }}">
        </div>

        <div>
            <textarea name="description" placeholder="Project description">{{ $project->description }}</textarea>
        </div>

        <div>
            <button type="submit">Update Project</button>
        </div>
    </form>

    <form action="/projects/{{$project->id}}" method="POST">

        @csrf

        @method('DELETE')  {{-- SAME gambiarra for the browser--}}


        <div>
            <button type="submit">Delete Project</button>
        </div>
    </form>

@endsection
