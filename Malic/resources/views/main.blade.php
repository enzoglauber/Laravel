<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<title>Controle de estoque</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	<div class="container-fluid">
		@include('menu')
		@yield('menu')
		
		@yield('content')
	</div>
</body>
</html>