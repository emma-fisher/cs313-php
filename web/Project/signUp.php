

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
</head>

<body>
<div>

<h1>Sign up for new account</h1>

<form id="mainForm" action="createAccount.php" method="POST">

	<input type="text" name="first_name" placeholder="First Name">
	<label for="first_name">First Name</label>
	<br /><br />

	<input type="text" name="last_name" placeholder="Last Name">
	<label for="last_name">Last Name</label>
	<br /><br />

	<input type="email" name="email" placeholder="Username">
	<label for="email">Email</label>
	<br /><br />

	<input type="password" name="password" placeholder="Password"></input>
	<label for="password">Password</label>
	<br /><br />

	<input type="submit" value="Create Account" />

</form>


</div>

</body>
</html>