
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gallery App Roy</title>

	
	<!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="{{ url(elixir('css/all.css')) }}">
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
<!-- ROBOTO	 -->
</head>
<body>

@include('layouts.nav')	
	
<div class="container">


	@yield('content')
	
</div>

<!-- @include('layouts.footer') -->
	
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	
</body>
</html>
