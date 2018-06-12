<?php
require("dbConnect.php");
$courseId = htmlspecialchars($_GET["course_id"]);
?>
<!DOCTYPE html>
<html>
    <head>
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.js"></script>
        <link rel="stylesheet" href="css/uikit.min.css" type="text/css">
        <link rel="stylesheet" href="website.css" type="text/css">
        <title></title>
    </head>
    <body>
    
    <div class="uk-card uk-card-default uk-card-body uk-width-1-2@m uk-position-center">
        <h3 class="uk-card-title">Create Post</h3>

            <form action="insertPost.php" method="POST">

                    <div class="uk-margin">
                        <input class="uk-input uk-width-1-2" type="text" name="title" placeholder="Title">
                    </div>

                    <div class="uk-margin">
                        <textarea class="uk-textarea" rows="5" name="description" placeholder="Description"></textarea>
                    </div>

                    <div class="uk-margin">
                        <label>Price<input class="uk-input uk-width-1-4" type="number uk-width-1-2" name="price"></label>
                    </div>

                    <div class="uk-margin">
                        <textarea class="uk-textarea" rows="5" name="tips" placeholder="Tips"></textarea>
                    </div>

                    <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                        <label><input class="uk-radio" type="radio" name="category" value="outdoor"> Outdoor</label>
                        <label><input class="uk-radio" type="radio" name="category" value="service"> Service</label>
                        <label><input class="uk-radio" type="radio" name="category" value="romantic"> Romantic</label>
                        <label><input class="uk-radio" type="radio" name="category" value="group date"> Group Date</label>
                    </div>

                    <input class="uk-input uk-width-1-4 uk-position-center" type="submit" id="create-post-button" value="Create">

            </form>
        </div>
    </body>

</html>