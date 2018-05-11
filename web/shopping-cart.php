<!DOCTYPE html>
<html>
<head>
	<title>Submission Results</title>
</head>

<body>
	<h1>Submission Results</h1>
	The flavor you added is: <?php 
	foreach($_POST[flavors] as $flavor) {
            echo $flavor . ", ";
		}
		?>

</body>


</html>