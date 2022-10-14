<?php 
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav>
        <div class="navbar">
            <ul>
                <li>option1</li>
                <li>option2</li>
                <li>option3</li>
                <li>option4</li>
            </ul>
        </div>
</nav>
    <div class="hero">
        <h2>Sign up</h2>
        <form action="" method="POST">
            <label for="name">Name</label>
            <input type="text">

            <label for="lname">Last Name</label>
            <input type="text">

            <label for="Email">Email:</label>
            <input type="email">

            <label for="password">Password</label>
            <input type="password" require>


            <input type="submit">

        </form>
        
    </div>
    <?php
        echo $_SESSION['username'];
    ?>
</body>
</html>