<?php

    require_once "./../controller/controller_login/controller_login.php";

    if(!$_SESSION['first']){
        header("location: login.php");
        die;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['first'];?></title>
</head>
<body>
    <p>mohamed</p>
</body>
</html>