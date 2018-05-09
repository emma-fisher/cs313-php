

 <?php
    $flavor = htmlspecialchars($_POST["name"]);

    echo $_POST["name"];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Submission Results</title>
</head>

<body>
	<h1>Submission Results</h1>

	<p>Your name is: <?=$flavor ?></p>

</body>


</html>