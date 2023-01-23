<?php

    require_once(__DIR__ . "./../../modal/modal_index/modal_index.php");


    $insertDataUser = new addsong();
    
    if (isset($_POST['saveuser']))
    {
        $first = $_POST['firstuser'];

        $sql = $insertDataUser->addartist($first);

        header('location: ../../view/login.php');
    }

    if (isset($_POST['savealbum']))
    {
        $first = $_POST['firstuser1'];

        $sql = $insertDataUser->addalbum1($first);

        header('location: ../../view/login.php');
    }

    if (isset($_POST['edittask']))
    {
        $date = $_POST['editdate_art'];
        $title  = $_POST['edittitle_art'];
        $artist_id = $_POST['editname_art'];
        $album_id = $_POST['editalbum_art'];
        $word = $_POST['editwords_art'];
        $id = $_POST['idd3'];

        $sql = $insertDataUser->update($id,$album_id,$artist_id,$title,$word,$date);

        header('location: ../../view/index.php');
    }

    if(isset($_POST['saveedit']))
    {
        // $id = $_POST['idd3'];
        $index = $_POST['idd4'];
        $sql = $insertDataUser->updatdelet($index);

        if ($sql)
        {
            header('location: ../../view/index.php');
        }
        else
        {
            header('location: ../../view/index.php');

        }
    }

    if (isset($_POST['savesong']))
    {
        $date = $_POST['date_art'];
        // var_dump($date );
        // die();
        $title  = $_POST['title_art'];
        $artist_id = $_POST['name_art'];
        $album_id = $_POST['album_art'];
        // $status = $_POST[''];
        $word = $_POST['words_art'];

        $sql = $insertDataUser->addmusic($album_id,$artist_id,$title,$word,$date);

        if ($sql)
        {
            echo "<script>alert('Data oui');</script>";
            
            header('location: ../../view/index.php');
        }
        else
        {
            header('location: ../../view/index.php');
        

            // header('location: ../../view/index.php');
        }
    }

    // if (isset($_POST['savesong']))
    // {
    //     $sql = $insertDataUser->test();

    //     if ($sql)
    //     {
    //         echo "<script>alert('Data oui');</script>";
    //     }
    //     else
    //     {
    //         echo "<script>alert('Data no');</script>";
    //     }
    // }
?>