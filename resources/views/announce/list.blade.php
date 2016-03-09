<html>

	<head>
		<title>AnnunciBook</title>
	</head>
	
	<body>
	
		<ul>
			@foreach($announces as $announce):
			<li><a href="{{ url('annunci/' . $announce->id) }}">{{ $announce->title }}</a></li>
			@endforeach
		</ul>
	
	</body>

</html>