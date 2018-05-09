

 <?php
    $flavor = htmlspecialchars($_POST["name"]);

    echo "Your flavor is " . $flavor;
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