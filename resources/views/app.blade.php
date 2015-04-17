<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	
	<title>My New App</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0-rc.2/css/select2.min.css" />
	

</head>
<body>
	
	<div class="container">
		
		@include('flash::message')

		@yield('content')	
	</div>
	
	

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0-rc.2/js/select2.min.js"></script>
	<script>
		$('#flash-overlay-modal').modal();
		//$('div.alert').not('.alert-important').delay(3000).slideUp(300);
	</script>
	@yield('footer')
	
</body>
</html>
