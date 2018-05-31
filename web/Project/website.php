<?php
    require("dbConnect.php");

    $db = get_db();

    if (!isset($db))
    {
        die("DB Connection was not set");
    }

    $query = "SELECT title, description_text FROM posts";
    $statement = $db->prepare($query);
    //Bind any variables I need to
    $statement->execute();
    $posts = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
    <head>
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.js"></script>
        <link rel="stylesheet" href="css/uikit.min.css" type="text/css">
        <title>
            Friday Nite
        </title>
    </head>
    <body>

   
        
    <!-- <nav class="uk-navbar-container uk-margin" uk-navbar>
        <div class="uk-navbar-center">
            <a class="uk-navbar-item uk-logo" href="">Fryday Nite</a>
        </div>
    </nav> -->

    <nav class="uk-navbar-container" uk-navbar>

        <div class="uk-navbar-center">
            <ul class="uk-navbar-nav">
                <li class="uk-active uk-logo"><a href="#">Friday Nite</a></li>
            </ul>
        </div>

        <div class="uk-navbar-right">

            <ul class="uk-navbar-nav">
                <li class="uk-active"><a href="#">Menu</a></li>
                <li>
                    <a href="#">Parent</a>
                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li class="uk-active"><a href="#">Active</a></li>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#">Item</a></li>
            </ul>

        </div>

    </nav>

    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
        <?php 
            foreach ($posts as $post)
            {
                $title = $post["title"];
                $description = $post["description_text"];
                            
                echo "<div>
                        <div class='uk-card uk-card-default uk-card-body'>
                            <h3 class='uk-card-title'> $title </h3>
                            <p> $description </p>
                        </div>
                    </div>";
            }
        ?>
    </div>

    </body>
</html>