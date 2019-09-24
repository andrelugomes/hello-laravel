@extends('layout')

@section('title','Projects')

@section('content')

    <h1> {{ $project->title }}</h1>

    <div class="content">
        {{ $project->description }}
    </div>

    <h2>Tasks</h2>
    <di>
        @foreach($project->tasks as $task)
            <div>

                <form method="POST" action="/tasks/{{$task->id}}">
                    @method('PATCH')
                    @csrf

                    <label class="checkbox {{$task->completed ? 'is-complete' : ''}}" for="completed">
                        <input type="checkbox" name="completed"
                               onChange="this.form.submit()" {{$task->completed ? 'checked' : ''}}>

                        {{$task->description}}

                    </label>

                </form>

            </div>
        @endforeach
    </di>

    <div>
        <a href="/projects/{{ $project->id }}/edit">Edit</a>
    </div>

@endsection
