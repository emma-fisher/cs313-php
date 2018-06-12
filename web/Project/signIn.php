
<?php


session_start();
$badLogin = false;
// First check to see if we have post variables, if not, just
// continue on as always.
if (isset($_POST['email']) && isset($_POST['password']))
{
	// they have submitted a username and password for us to check
	$email = $_POST['email'];
	$password = $_POST['password'];
	// Connect to the DB
	require("dbConnect.php");
	$db = get_db();
	$query = 'SELECT password FROM users WHERE email=:email';
	$statement = $db->prepare($query);
	$statement->bindValue(':email', $email);
	$result = $statement->execute();
	if ($result)
	{
		$row = $statement->fetch();
		$hashedPasswordFromDB = $row['password'];
		// now check to see if the hashed password matches
		if (password_verify($password, $hashedPasswordFromDB))
		{
			// password was correct, put the user on the session, and redirect to home
			$_SESSION['email'] = $email;
			header("Location: website.php");
			die(); // we always include a die after redirects.
		}
		else
		{
			$badLogin = true;
		}
	}
	else
	{
		$badLogin = true;
	}
}
// If we get to this point without having redirected, then it means they
// should just see the login form.
?>

<!DOCTYPE html>
<html>
<head>
	<script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.js"></script>
    <link rel="stylesheet" href="css/uikit.min.css" type="text/css">
	<link rel="stylesheet" href="website.css" type="text/css">
	<title>Sign In</title>
</head>

<body>
<div>

<?php
if ($badLogin)
{
	echo "Incorrect username or password!<br /><br />\n";
}
?>


<div class="uk-card uk-card-default uk-card-body uk-width-1-4@m uk-position-center">
    <h3 class="uk-card-title">Please sign in below:</h3>

    <form id="mainForm" action="signIn.php" method="POST">

	<input class= "uk-input" type="email" name="email" placeholder="Email">
	<br /><br />

	<input class="uk-input" type="password" name="password" placeholder="Password">
	<br /><br />

	<input class="uk-input uk-width-1-2 uk-position-center" id="sign-in-button" type="submit" value="Sign In" />

	</form>

	<br /><br />

	Or <a href="signUp.php">Sign up</a> for a new account.
</div>





</div>

</body>
</html>