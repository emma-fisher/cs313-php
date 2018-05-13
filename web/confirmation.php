<!DOCTYPE html>
<html>
<head>
	<title>Submission Results</title>
</head>

<body>
	<h1>Purchase Confirmation</h1>
    <?php 
    
        $firstname = htmlspecialchars($_POST["firstname"]);
        echo 'First Name: ' . $firstname;
        $lastname = htmlspecialchars($_POST["lastname"]);
        $street = htmlspecialchars($_POST["street"]);
        $city = htmlspecialchars($_POST["city"]);
        $state = htmlspecialchars($_POST["state"]);
        $zip = htmlspecialchars($_POST["zip"]);
    ?>

   
    <p>Last Name: <?=$lastname ?></p>
	<p>Street: <?=$street ?></p>
	<p>City: <?=$city ?></p>
    <p>State: <?=$state ?></p>
    <p>Zip Code: <?=$zip ?></p>

    <p>Thank you for shopping!</p>

</body>


</html>