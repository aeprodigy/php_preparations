<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //cookies save data from the user side and sessions save data from the server side.
    //usually used to save less important data and saved on your computer.
    //it is used by websites to show what types of things a user likes in an example of it.
    //it has a time limit. eg 30 days.
    //setcookie("cookie's_name,"Cookie's values", duration);
    setcookie("name","daniel", time() -1;

    //under this line we set a session
     $_SESSION['name'] = "12";
     

    ?>
</body>
</html>