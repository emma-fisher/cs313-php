<?php
require("dbConnect.php");
$courseId = htmlspecialchars($_GET["course_id"]);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="insertPost.php" method="POST">
<input type="hidden" name="course_id" value="<?php echo $courseId; ?>">
<input type="date" name="date"><br>
<textarea name="content" placeholder="Content"></textarea>

<br><br>
<input type="submit" value="Add Note">
</form>

</body>
</html>