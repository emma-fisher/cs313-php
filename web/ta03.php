<!DOCTYPE html>
<html>
    <body>
        Your name is <?php echo $_POST["name"]; ?>
        <br>
        Your email is <?php echo $_POST["email"]; ?>
        <br>
        Your major is <?php echo $_POST["major"]; ?>
        <br>
        You've visited 
        <?php 
        foreach($_POST[continent] as $selected) {
            echo $selected . ", ";
        }
         ?>
        <br>
        <?php echo $_POST["comment"]; ?>
    </body>
</html>