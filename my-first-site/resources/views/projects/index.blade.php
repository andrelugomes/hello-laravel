@extends('layout')

@section('title','Projects')

@section('content')

	<h1>Projects</h1>

	<ul>
		
		@foreach ($projects as $project)

			<li>{{ $project->title }}</li>

		@endforeach

	</ul>

@endsection