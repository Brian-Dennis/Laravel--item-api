<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TodoList</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	{{-- Navbar --}}
	@include('inc.navbar')
	<div class="container">
		{{-- Messages --}}
		@include('inc.messages')
		@yield('content')
	</div>

	<footer class="text-center" id="footer">
		<p>Copyright 2017 &copy; TodoList</p>
	</footer>
</body>
</html>