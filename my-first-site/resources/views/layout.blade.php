<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'Hello Laravel')</title>
</head>
<body>
	<ul>
		<li><a href="/">home</a></li>

		<li><a href="/about">About</a></li>

		<li><a href="/contact">Contact</a></li>

		<li><a href="/tasks">Tasks</a></li>
	</ul>
	@yield('content')
</body>
</html>