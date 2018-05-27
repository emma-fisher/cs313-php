<?php
    try
    {
        $dbUrl = getenv('DATABASE_URL');
        $dbopts = parse_url($dbUrl);
        
        $dbHost = $dbopts["host"];
        $dbPort = $dbopts["port"];
        $dbUser = $dbopts["user"];
        $dbPassword = $dbopts["pass"];
        $dbName = ltrim($dbopts["path"],'/');
        
        $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
    }
    catch (PDOException $ex)
    {
    echo 'Error!: ' . $ex->getMessage();
    die();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.js"></script>
        <link rel="stylesheet" href="css/uikit.min.css" type="text/css">
        <title>
            Fryday Nite
        </title>
    </head>
    <body>
        <nav class="uk-navbar-container uk-margin" uk-navbar>
            <div class="uk-navbar-center">
                <a class="uk-navbar-item uk-logo" href="">Fryday Nite</a>
            </div>
            <div class="uk-navbar-right">
                <a href="" uk-icon="icon: question; ratio:2">Help</a>
            </div>
        </nav>
    <?php
       
        foreach ($db->query('SELECT first_name, last_name FROM users') as $user)
        {
            $first_name = $user["first_name"];
            $last_name = $user["last_name"];
            
            echo "<li>$first_name $last_name</li><br>";
        }
    ?>

    </body>
</html>