<?php

    require_once(__DIR__ . "./../../modal/modal_signup/modal_signup.php");
    require_once(__DIR__ . "./../../view/mail/mail.php");

    $insertDataUser = new userlist();
    // $insertDataUser->test();
    if (isset($_POST['save']))
    {
        $first = $_POST['inpfirst']; 
        $last = $_POST['inplast'];
        $email = $_POST['inpemail'];
        $num_tele = $_POST['phone'];
        $datebirth = $_POST['inpdate'];
        $password = $_POST['inppass'];
        $cPassword = $_POST['inpcpass'];
        $code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
        $sql = $insertDataUser->adduser($first,$last,$email,$num_tele,$datebirth,$password,$cPassword,$code);

        if ($sql)
        {
            phpmailer($code);
            $_SESSION['msg_ver1'] = "Un e-mail de vérification a été envoyé à votre adresse e-mail";
            header('location: ../../view/login.php');
        }
        else
        {
            // $_SESSION['message'] = "L'adresse e-mail que vous avez saisie n'est pas associée à un compte";
        }
    }
?>