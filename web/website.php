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
    </head>
    <body>
        <h1>Fryday Nite</h1>

        <ul>
    <?php
       
        foreach ($db->query('SELECT first_name, last_name FROM users') as $user)
        {
            $first_name = $user["first_name"];
            $last_name = $user["last_name"];
            
            echo "<li>$first_name $last_name</li>";
        }
    ?>
        </ul>

    </body>
</html>