<html>
<body>
	<form action="{{ url('users') }}" method="POST">
		<input name="name" type="text" placeholder="Username" />
		<input name="email" type="email" placeholder="E-Mail" />
		<input name="password" type="password" placeholder="Password" />
		<input type="submit" value="Salva" />
	</form>
</body>
</html>
