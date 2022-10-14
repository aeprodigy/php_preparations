<?php $title = "The index Page"
    
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title?></title>
</head>
<body>
    <li><a href="sessions.php">Sessions</a></li>
    <li><a href="start.php">Start</a></li>
    <?php
    $_SESSION['username'] = "bojackh98a";
    echo $_SESSION['username'];

    if(isset($_SESSION['username']))
    {
        echo "Logged in Successfully";
    }
    else{
        echo "youre not Logged in";
    }
    ?>
</body>
</html>