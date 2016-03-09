<html>

	<body>
	
		<form method="POST" action="{{ url('auth/login') }}">
			<input type="text" name="email" />
			<input type="password" name="password" />
			<input type="button" value="Login" />
		</form>

	</body>

</html>