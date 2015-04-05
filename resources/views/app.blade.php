<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	
	<title>Laravel</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	
</head>
<body>
	
	<div class="container">
		@yield('content')	
	</div>
	
	@yield('footer')
	
</body>
</html>
