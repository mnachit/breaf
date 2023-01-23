<?php

    require_once __DIR__ . './../config.php';

    $test = new database();

    if (isset($_GET['code']))
    {
        $code = trim($_GET['code']);
        // echo $code;

        $q = "SELECT * FROM `users` WHERE code = '$code'";
        $stmt2 = $test->connection()->query($q);
            // $row2 = $stmt2->fetch();
            // echo $row2['first'];
            // die;
        $fg = "UPDATE `users` SET `code_vere`= 1 WHERE code = '$code'";
            
        $stmt2 = $test->connection()->query($fg);
        $_SESSION['message_o_ver'] = "Votre compte a été activé";
            
        // else
        // {
        //     $_SESSION['message_ver1'] = "Code Invalide";
        // }
        header('location: login.php');
    
    }
?>