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
            <a class="uk-navbar-item" href="">Hello 
            <?php 
                foreach ($db->query('SELECT first_name FROM users') as $user)
                {
                    $first_name = $user["first_name"];
                    
                    if ($first_name == 'Emma')
                    {
                        echo $first_name;
                    }
                    
                }
            ?> </a>
        </div>
    </nav>

    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <h3 class="uk-card-title">
                <?php 
                    foreach ($db->query('SELECT title FROM posts') as $post)
                    {
                        $title = $post["title"];
                        
                        if ($title == 'Walmart')
                        {
                            echo $title;
                        }
                    }
                ?>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <h3 class="uk-card-title">
                <?php 
                    foreach ($db->query('SELECT title FROM posts') as $post)
                    {
                        $title = $post["title"];
                        
                        if ($title == 'Eat a burrito')
                        {
                            echo $title;
                        }
                    }
                ?>
                </h3>
                <p><?php 
                    foreach ($db->query('SELECT description_text FROM posts') as $post)
                    {
                        $description = $post["description_text"];
                        $title = $post["title"];
                        
                        if ($title == 'Eat a burrito')
                        {
                            echo $description;
                        }
                    }
                ?></p>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <h3 class="uk-card-title">
                <?php 
                    foreach ($db->query('SELECT title FROM posts') as $post)
                    {
                        $title = $post["title"];
                        
                        if ($title == 'Picnic')
                        {
                            echo $title;
                        }
                    }
                ?>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
    </div>

    <?php

        $first_name;
        $last_name;
       
        foreach ($db->query('SELECT first_name, last_name FROM users') as $user)
        {
            $first_name = $user["first_name"];
            $last_name = $user["last_name"];
            
            echo "<p>$first_name $last_name</p><br>";
        }
    ?>

    </body>
</html>