<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="main.css">
        <title>Homepage</title>
    </head>
    <body>
        <h1>CS 313 Homepage </h1>
        <h3>Emma Fisher</h3>
        <p>Welcome to my webpage! I'm Emma, a Computer Science 
        student currently attending BYU-Idaho.</p>
        <?php
            $date = strtotime("September 21, 2018 6:00 AM");
            $remaining = $date - time();
            $days_remaining = floor($remaining / 86400);
            $hours_remaining = floor(($remaining % 86400) / 3600);
            $minutes_remaining = floor(($remaining % 3600) / 60);
            $seconds_remaining = (remaining % 60);
            echo "Time until my next birthday: $days_remaining days $hours_remaining hours";
        ?>
    </body>
</html>