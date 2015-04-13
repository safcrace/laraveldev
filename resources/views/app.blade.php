<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	
	<title>Laravel</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	
</head>
<body>
	
	<div class="container">
		
		@include('flash::message')

		@yield('content')	
	</div>
	
	@yield('footer')

	<script src="//code.jquery.com/jquery.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script>
		$('#flash-overlay-modal').modal();
		//$('div.alert').not('.alert-important').delay(3000).slideUp(300);
	</script>
	
</body>
</html>
