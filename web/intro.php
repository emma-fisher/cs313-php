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
        <div>
        <h2>Emma Fisher</h2>
        <h3>Welcome to my webpage! I'm Emma, a Computer Science 
        student currently attending BYU-Idaho.</h3>
        <div>
        <img id="bearPic" src="https://scontent-sea1-1.xx.fbcdn.net/v/t1.0-9/19225525_1386650188069841_3093724628678236927_n.jpg?_nc_cat=0&oh=99d91432eca6b5f6988a58a7e5458ef7&oe=5B4F9288")>
        </div>
        <div class="daysToBday">
        <?php
            $date = strtotime("September 21, 2018 6:00 AM");
            $remaining = $date - time();
            $days_remaining = floor($remaining / 86400);
            $hours_remaining = floor(($remaining % 86400) / 3600);
            $minutes_remaining = floor(($remaining % 3600) / 60);
            $seconds_remaining = ($remaining % 60);
            echo "Time until my next birthday: $days_remaining days $hours_remaining hours $minutes_remaining minutes $seconds_remaining seconds";
        ?>
        </div>
        <a href="assignments.php">Click Here to see my Assignments Page!</a>
        </div>
    </body>
</html>