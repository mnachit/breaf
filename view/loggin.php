<?php

    require_once "./../controller/controller_Forgot_Password/controller_Forgot_Password.php";

    session_unset();
    session_destroy();
    header('location: login.php');
?>