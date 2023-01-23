<?php
    require_once(__DIR__ . "./../../modal/modal_Forgot_Password/modal_Forgot_Password.php");
    require_once(__DIR__ . "./../../view/mail/mail.php");

    $insertDataUser = new editpass();

    if (isset($_POST['Search']))
    {
        $email = $_POST['passs'];

        $sql = $insertDataUser->checkemail($email);

        
        if ($sql == 0)
        {
            $_SESSION['how1'] = "No search results";
            
        }
        else
        {
            $_SESSION['how'] = "A message has been sent to your email to change your password";
            $_SESSION['email'] = $email;
            phpmailer1();
        }
        header('location: ../../view/login.php');
    }
    if (isset($_POST['rest_password']))
    {
        $email = $_POST['inppass'];
        $Cemail = $_POST['inpcpass'];

        $id = $_SESSION['email'];
        
        
        $sql = $insertDataUser->rest_password($id, $email,$Cemail);

        if ($sql)
        {
            $_SESSION['how2'] = "Your account password has been changed";
            
        }
        else
        {
            $_SESSION['how3'] = "Your account password has not been changed";
        }

        header('location: ../../view/loggin.php');
    }
?>