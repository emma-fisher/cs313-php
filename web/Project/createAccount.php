
<?php

// get the data from the POST
$username = htmlspecialchars($_POST['txtUser']);
$password = htmlspecialchars($_POST['txtPassword']);

// Get the hashed password.
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
// Connect to the database
require("dbConnect.php");
$db = get_db();
$query = "INSERT INTO users (email, password) VALUES(:username, :password)";
$statement = $db->prepare($query);
$statement->bindValue(':username', $username, PDO::PARAM_STR);
$statement->bindValue(':password', $hashedPassword, PDO::PARAM_STR);
$statement->execute();
// finally, redirect them to the sign in page
header("Location: signIn.php");
die(); // we always include a die after redirects. In this case, there would be no
       // harm if the user got the rest of the page, because there is nothing else
       // but in general, there could be things after here that we don't want them
       // to see.
?>