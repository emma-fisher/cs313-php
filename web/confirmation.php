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
        echo 'Last Name: ' . $lastname;
        $street = htmlspecialchars($_POST["street"]);
        echo 'Street: ' . $street;
        $city = htmlspecialchars($_POST["city"]);
        echo 'City: ' . $city;
        $state = htmlspecialchars($_POST["state"]);
        echo 'State: ' . $state;
        $zip = htmlspecialchars($_POST["zip"]);
        echo 'Zip Code: ' . $zip;
    ?>

    <p>Thank you for shopping!</p>

</body>


</html>