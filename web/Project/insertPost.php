<?php
    $title = htmlspecialchars($_POST["title"]);
    $description = htmlspecialchars($_POST["description"]);
    $price = htmlspecialchars($_POST["price"]);
    $category = htmlspecialchars($_POST["category"]);	
    $tips = htmlspecialchars($_POST["tips"]);

    // echo "title: $title\n";
    // echo "description: $description\n";
    // echo "price: $price\n";
    // echo "category: $category\n";
    // echo "tips: $tips\n";

    $categoryId;
    if ($category == "outdoor") {
        $categoryId = 1;
    };
    else if ($category == "service") {
        $categoryId = 2;
    };
    else if ($category == "romantic") {
        $categoryId = 3;
    };
    else if ($category == "group date") {
        $categoryId = 4;
    };

    require("dbConnect.php");
    $db = get_db();
    $query = "INSERT INTO posts (category_id, title, description_text, price, tips) VALUES (:categoryId, :title, :description, :price, :tips)";
    $statement = $db->prepare($query);
    $statement->bindValue(":categoryId", $categoryId, PDO::PARAM_INT);
    $statement->bindValue(":title", $title, PDO::PARAM_STR);
    $statement->bindValue(":description", $description, PDO::PARAM_STR);
    $statement->bindValue(":price", $price, PDO::PARAM_INT);
    $statement->bindValue(":tips", $tips, PDO::PARAM_STR);
    $statement->execute();
    //header("Location: courseDetails.php?course_id=$courseId");
    die();
?>