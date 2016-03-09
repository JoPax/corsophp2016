<html>

<body>
	<h1>UTENTI</h1>
	
	<a href="{{ url('/') }}">Home</a>
	
	<ul>
		@foreach($users as $user)
			<li>{{ $user->name }} {{ $user->email }}</li>
		@endforeach
	</ul>
</body>

</html>