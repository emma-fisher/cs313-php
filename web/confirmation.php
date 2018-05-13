<!DOCTYPE html>
<html>
<head>
	<title>Submission Results</title>
</head>

<body>
	<h1>Purchase Confirmation</h1>
    <?php 
    
        $firstname = htmlspecialchars($_POST["firstname"]);
        echo 'First Name: ' . $firstname . '<br>';
        $lastname = htmlspecialchars($_POST["lastname"]);
        echo 'Last Name: ' . $lastname . '<br>';
        $street = htmlspecialchars($_POST["street"]);
        echo 'Street: ' . $street . '<br>';
        $city = htmlspecialchars($_POST["city"]);
        echo 'City: ' . $city . '<br>';
        $state = htmlspecialchars($_POST["state"]);
        echo 'State: ' . $state . '<br>';
        $zip = htmlspecialchars($_POST["zip"]);
        echo 'Zip Code: ' . $zip . '<br>';
    ?>

    <p>Thank you for shopping!</p>

</body>


</html>