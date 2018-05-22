<!DOCTYPE html>
<html>
    <head>
        <title> Scriptures </title>
    </head>
    <body>
        <?php
        $dbUrl = getenv('DATABASE_URL');

        $dbopts = parse_url($dbUrl);
        
        $dbHost = $dbopts["host"];
        $dbPort = $dbopts["port"];
        $dbUser = $dbopts["user"];
        $dbPassword = $dbopts["pass"];
        $dbName = ltrim($dbopts["path"],'/');
        
        $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
        
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "<h2>Scripture Resources</h2>";

        foreach ($db->query('SELECT * FROM scriptures') as $row)
        {
            echo '<strong>' . $row['book'] . ' ' . $row['chapter'] . ":" . $row['verse'] . '</strong> - "' . $row['content'] . '"';
            echo '<br/>';
        }
        ?>
    </body>
</html>


