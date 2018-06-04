<?php
    $title = htmlspecialchars($_POST["title"]);
    $description = htmlspecialchars($_POST["description"]);
    $price = htmlspecialchars($_POST["price"]);
    $category = htmlspecialchars($_POST["category"]);
    $tips = htmlspecialchars($_POST["tips"]);
    echo "title: $title\n";
    echo "description: $description\n";
    echo "price: $price\n";
    echo "category: $category\n";
    echo "tips: $tips\n";
    require("dbConnect.php");
    $db = get_db();
    // $query = "INSERT INTO note (course_id, content, date) VALUES (:courseId, :content, :date)";
    // $statement = $db->prepare($query);
    // $statement->bindValue(":courseId", $courseId, PDO::PARAM_INT);
    // $statement->bindValue(":content", $content, PDO::PARAM_STR);
    // $statement->bindValue(":date", $date, PDO::PARAM_STR);
    // $statement->execute();
    // header("Location: courseDetails.php?course_id=$courseId");
    // die();
?>