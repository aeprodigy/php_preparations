<?php
    session_start();
 ?>

<?php   $title=" hello"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
     <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document:<?php echo $title; ?></title>
</head>
<body>
    <div class="gamer">
    <?php echo 50+4; 
    
    echo $_SESSION['username'];
    ?>
    </div>
    
</body>
</html>