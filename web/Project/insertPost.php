<?php
   
    session_start();
    if (isset($_SESSION['email']))
    {
        $email = $_SESSION['email'];
    }
    else
    {
        header("Location: signIn.php");
        die(); // we always include a die after redirects.
    }

    $title = htmlspecialchars($_POST["title"]);
    $description = htmlspecialchars($_POST["description"]);
    $price = htmlspecialchars($_POST["price"]);
    $category = htmlspecialchars($_POST["category"]);	
    $tips = htmlspecialchars($_POST["tips"]);
    $user_id = htmlspecialchars($_SESSION['email']);

    $categoryId;
    if ($category == "outdoor") {
        $categoryId = 1;
    }
    else if ($category == "service") {
        $categoryId = 2;
    }
    else if ($category == "romantic") {
        $categoryId = 3;
    }
    else if ($category == "group date") {
        $categoryId = 4;
    }
    else {
        echo "error";
    }

    require("dbConnect.php");
    $db = get_db();
    $query = "INSERT INTO posts (category_id, title, description_text, price, tips, user_id) VALUES (:categoryId, :title, :description, :price, :tips, :user_id)";
    $statement = $db->prepare($query);
    $statement->bindValue(":categoryId", $categoryId, PDO::PARAM_INT);
    $statement->bindValue(":title", $title, PDO::PARAM_STR);
    $statement->bindValue(":description", $description, PDO::PARAM_STR);
    $statement->bindValue(":price", $price, PDO::PARAM_INT);
    $statement->bindValue(":tips", $tips, PDO::PARAM_STR);
    $statement->bindValue(":user_id", $user_id, PDO::PARAM_INT);
    $statement->execute();
    header("Location: website.php");
    die();
?>