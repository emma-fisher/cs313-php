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
        <title></title>
    </head>
    <body>

        <!-- <form action="insertPost.php" method="POST">
        <input type="hidden" name="course_id" value="<?php //echo $courseId; ?>">
        <input type="date" name="date"><br>
        <textarea name="content" placeholder="Content"></textarea>

        <br><br>
        <input type="submit" value="Add Note">
        </form> -->

        <form action="insertPost.php" method="POST">
            <fieldset class="uk-fieldset">

                <legend class="uk-legend">Create Post</legend>

                <div class="uk-margin">
                    <input class="uk-input" type="text" name="title" placeholder="Title">
                </div>

                <div class="uk-margin">
                    <textarea class="uk-textarea" rows="5" name="description" placeholder="Description"></textarea>
                </div>

                <div class="uk-margin">
                    Price<input type="number" name="price">
                </div>

                <div class="uk-margin">
                    <textarea class="uk-textarea" rows="5" name="tips" placeholder="Tips"></textarea>
                </div>

                <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                    <label><input class="uk-checkbox" type="checkbox" name="category[]" value="outdoor"> Outdoor</label>
                    <label><input class="uk-checkbox" type="checkbox" name="category[]" value="service"> Service</label>
                    <label><input class="uk-checkbox" type="checkbox" name="category[]" value="romantic"> Romantic</label>
                    <label><input class="uk-checkbox" type="checkbox" name="category[]" value="group date"> Group Date</label>
                </div>

                <input class="uk-button-default" type="submit" value="Create">

            </fieldset>
        </form>
    </body>

</html>