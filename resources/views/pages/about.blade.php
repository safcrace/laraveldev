<!doctype html>

<html lang="en">
	
	<head>

		<meta charset="UTF-8" />

		<title>Document</title>
		
	</head>

	<body>
		
		<h1>About Me</h1>

		@if (count($people))

			<h3>People I like:</h3>

				<ul>
					
					@foreach ($people as $person) 
						
						<li>{{ $person }}</li>

					@endforeach
				</ul>

		@endif

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti minima magnam earum quam necessitatibus veniam fugiat. Quos asperiores, dicta, expedita, sit, quis consectetur praesentium quia temporibus placeat dignissimos mollitia vitae?</p>

	</body>
</html>