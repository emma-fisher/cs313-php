<?php
    require("dbConnect.php");

    $db = get_db();

    if (!isset($db))
    {
        die("DB Connection was not set");
    }

    $query = "SELECT title, description_text, price, tips, rating FROM posts";
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
            <a class="uk-navbar-item uk-logo" href="">Frighday Nite</a>
        </div>
        <div class="uk-navbar-right">
            <ul class="uk-navbar-nav">
                <li>
                    <a class="uk-active" href="#">Menu</a>
                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li class="uk-active"><a href="#">My Posts</a></li>
                            <li class="uk-active"><a href="#">Account Settings</a></li>
                            <li class="uk-active"><a href="createPost.php">Create new post</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
        <?php 
            foreach ($posts as $post)
            {
                $title = $post["title"];
                $description = $post["description_text"];
                $price = $post["price"];
                $tips = $post["tips"];
                $rating = $post["rating"];
                            
                echo "<div>
                        <div class='uk-card uk-card-default uk-card-body'>
                            <h3 class='uk-card-title'> $title </h3>
                            <p> $description </p>
                            <a class='uk-button uk-button-default uk-button-small' href='#modal-center' uk-toggle>See More</a>
                        </div>
                    </div>
                    <div id='modal-center' class='uk-flex-top' uk-modal>
                        <div class='uk-modal-dialog uk-modal-body uk-margin-auto-vertical'>
                            <button class='uk-modal-close-default' type='button' uk-close></button>
                            <h3> $title - $price </h3>
                            <p> $description </p>
                            <h6> Tips:
                            <ul>
                                <li> $tips </li>
                            </ul>
                            <h4> $rating / 5 stars </h4>
                        </div>
                    </div>";
            }
        ?>
        

    </div>

    </body>
</html>