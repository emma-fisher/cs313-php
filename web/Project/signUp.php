

<!DOCTYPE html>
<html>
<head>
	<script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.js"></script>
    <link rel="stylesheet" href="css/uikit.min.css" type="text/css">
	<link rel="stylesheet" href="website.css" type="text/css">
	<title>Sign Up</title>
</head>

<body>
<div>

<div class="uk-card uk-card-default uk-card-body uk-width-1-4@m uk-position-center">
    <h3 class="uk-card-title">Sign up for a new account:</h3>

    <form id="mainForm" action="createAccount.php" method="POST">

	<input type="text" name="first_name" placeholder="First Name">
	<br /><br />

	<input type="text" name="last_name" placeholder="Last Name">
	<br /><br />

	<input class= "uk-input" type="email" name="email" placeholder="Email">
	<br /><br />

	<input class="uk-input" type="password" name="password" placeholder="Password">
	<br /><br />

	<input class="uk-input uk-width-1-2 uk-position-center" id="sign-in-button" type="submit" value="Create Account" />

	</form>

</div>


</div>

</body>
</html>