<?php

    require_once "./../controller/controller_login/controller_login.php";

    session_unset();
    session_destroy();
    header('location: login.php');
?>