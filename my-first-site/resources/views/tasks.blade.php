@extends('layout')


@section('title', 'My tasks')

@section('content')

	<h1>My Tasks</h1>

	<h2>PHP hander</h2>

	<ul>
		
		<?php  foreach ($tasks as $task) : ?>

			<li><?= $task; ?></li>

		<?php endforeach; 	?>

	</ul>

	<h2>Blade hander</h2>

	<ul>
		
		@foreach ($tasks as $task)

			<li>{{ $task }}</li>

		@endforeach

	</ul>


@endsection