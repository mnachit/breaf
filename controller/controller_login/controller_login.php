<?php

    require_once(__DIR__ . "./../../modal/modal_login/modal_login.php");

    // session_start();

    $testDataUser = new testUser();
    
    if (isset($_POST['login']))
    {
        $email = $_POST['logemail'];
        $password = $_POST['logpass'];
        
        $sql = $testDataUser->checkuser($email,$password);
        if ($sql->rowCount() > 0)
        {
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            if ($row['code_vere'] == '1')
            {
                // echo "<script>alert('Data oui');</script>";
                $_SESSION['first'] = $row['first'];
                $_SESSION['last']  = $row['last'];
                $_SESSION['username']  = $row['username'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['date'] = $row['datebirth'];
                $_SESSION['num_tele'] = $row['num_tele'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['image'] = $row['photo_pic'];

                header('location: ./../../view/index.php');
            }
            else
            {
                $_SESSION['message'] = "Ladresse e-mail que vous avez saisie nst pas associée à un compte";
                header('location: ../../view/logout.php');
            }
        }
        else
        {
            $_SESSION['message'] = "Ladresse e-mail que vous avez saisie nest pas associée à un compte";
            echo "den";
            header('location: ../../view/login.php');
            die;
        }
    }

    if (isset($_POST['task-save-btn']))
    {
        $date = $_POST['date_art'];
        $title  = $_POST['title_art'];
        $name_artist = $_POST['name of the artist'];
        $album = $_POST['album_art'];
        // $status = $_POST[''];
        $word = $_POST['words_art'];

        $_SESSION['first'] = "ssss";
        $sql = $testDataUser->addmusic($album,$title,$word,$date);
        if ($sql->rowCount() > 0)
        {
            $row = $sql->fetch(PDO::FETCH_ASSOC);
        }
    }

    if (isset($_POST['saveeditprofil']))
    {
        $first = $_POST['inpfirst']; 
        $last = $_POST['inplast'];
        $email = $_POST['inpemail'];
        $num_tele = $_POST['phone'];
        $datebirth = $_POST['inpdate'];
        $id = $_POST['idd3'];
        // var_dump($_FILES);
        // die;
        $image = $_FILES['picimage']['name'];
        $pic_tmp_name=$_FILES['picimage']['tmp_name'];
        $pic_img_folder='./imagess/'.$image;


        // echo $image;

        $sql = $testDataUser->updateuser($id,$first,$last,$email,$num_tele,$datebirth,$image);

        if ($sql)
        {
            
            move_uploaded_file($pic_tmp_name,$pic_img_folder);
            echo "test";
            
            header('location: ../../view/index.php');
        }
        else
        {
            echo "<script>alert('Data no');</script>";
        }
        // $sql1 = $testDataUser->test($id);
        // $roww = $sql->fetch(PDO::FETCH_ASSOC);
        // $_SESSION['first'] = $roww['first'];
        // $_SESSION['last']  = $roww['last'];
        // $_SESSION['username']  = $roww['username'];
        // $_SESSION['email'] = $roww['email'];
        // $_SESSION['date'] = $roww['datebirth'];
        // $_SESSION['num_tele'] = $roww['num_tele'];
        // header('location: ../../view/index.php');

        $sql = $testDataUser->test($id);
        $row = $sql->fetch(PDO::FETCH_ASSOC);
        if ($row['code_vere'] == '1')
        {
            // echo "<script>alert('Data oui');</script>";
            $_SESSION['first'] = $row['first'];
            $_SESSION['last']  = $row['last'];
            $_SESSION['username']  = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['date'] = $row['datebirth'];
            $_SESSION['num_tele'] = $row['num_tele'];
            $_SESSION['image'] = $row['photo_pic'];

            header('location: ./../../view/index.php');
        }
    }
?>