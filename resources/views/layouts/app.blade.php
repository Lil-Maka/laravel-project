<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Acme Version 1.0 fija</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	@include('inc.navbar')
	<div class="container">
		@if(Request::is('home'))
			@include('inc.showcase')
		@else
			Aqui no hay nada
		@endif
		<div class="row">
			<div class="col-md-8 col-lg-8">
				@yield('content')
			</div>
			<div class="col-md-4 col-lg-4">
				@include('inc.sidebar')
			</div>
		</div>
	</div>
	<footer id="footer" class="text-center">
		<p>© 2019 Learning purposes</p>
	</footer>
</body>
</html>