
<?php

// get the data from the POST
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
$first_name = htmlspecialchars($_POST['first_name']);
$last_name = htmlspecialchars($_POST['last_name']);

// Get the hashed password.
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
// Connect to the database
require("dbConnect.php");
$db = get_db();
$query = "INSERT INTO users (email, password, first_name, last_name) VALUES(:email, :password, :first_name, :last_name)";
$statement = $db->prepare($query);
$statement->bindValue(':email', $email, PDO::PARAM_STR);
$statement->bindValue(':password', $hashedPassword, PDO::PARAM_STR);
$statement->bindValue(':first_name', $first_name, PDO::PARAM_STR);
$statement->bindValue(':last_name', $last_name, PDO::PARAM_STR);
$statement->execute();
// finally, redirect them to the sign in page
header("Location: signIn.php");
die();
?>