<html>
<body>
	<form action="{{ url('users/' . $user->id) }}" method="POST">
		<input name="name" type="text" placeholder="Username" value="{{ $user->name }}" />
		<input name="email" type="email" placeholder="E-Mail" value="{{ $user->email }}" />
		<input name="password" type="password" placeholder="Password" />
		<input type="submit" value="Salva" />
	</form>
</body>
</html>
