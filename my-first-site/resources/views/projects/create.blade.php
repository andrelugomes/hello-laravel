@extends('layout')

@section('title','Projects')

@section('content')

    <h1>Projects</h1>

    <form action="/projects" method="POST">

        {{ csrf_field() }} {{--\App\Http\Middleware\VerifyCsrfToken::class, Middleeware Kernel.php--}}

        <div>
            <input type="text"  class="input {{$errors->has('title') ? 'is-danges':''}}" name="title" placeholder="Project title" required value="{{ old('title') }}">
        </div>

        <div>
            <textarea name="description" placeholder="Project description" required> {{ old('description') }} </textarea>
        </div>

        <div>
            <button type="submit">Create Project</button>
        </div>
    </form>

    @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection
