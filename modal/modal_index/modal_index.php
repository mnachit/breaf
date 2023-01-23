<?php

    require_once(__DIR__ . "./../../config.php");

    class addsong
    {
        public $conn;

        public function __construct()
        {
            $this->conn = new database();
        }

        public function addartist($first)
        {
            $code_ver = "0";
            $sql = "INSERT INTO `artist`(`id`, `name`) VALUES (NULL,'$first')";
            
            $stm = $this->conn->connection()->query($sql);

            return $stm;
        }

        public function addalbum1($first)
        {
            $code_ver = "0";
            $sql = "INSERT INTO `album`(`id`, `name`) VALUES (NULL,'$first')";
            
            $stm = $this->conn->connection()->query($sql);

            return $stm;
        }

        public function addmusic($album_id,$artist_id,$title,$word,$date)
        {
            // $code_ver = "0";
            for ($i= 0 ; $i < count($album_id); $i++)
            {
                $sql = "INSERT INTO `Music`(`id`, `album_id`, `artist_id`, `title`, `words`, `release_date`, `code_vere`) VALUES (NULL,'$album_id[$i]','$artist_id[$i]','$title[$i]','$word[$i]','$date[$i]','1');";
                
                $stm = $this->conn->connection()->query($sql);

                // return $stm;
            }
        }

        function update($id,$album_id,$artist_id,$title,$word,$date)
        {
            $sql = "UPDATE `Music` SET `album_id` = '$album_id', `artist_id` = '$artist_id',`title` = '$title', `words` = '$word', `release_date` = '$date' WHERE `id` = '$id'";

            $stm = $this->conn->connection()->query($sql);

            return $stm;
        }

        function updatdelet($index)
        {
            $sql = "UPDATE `Music` SET `code_vere` = 0 WHERE `id` = '$index'";

            $stm = $this->conn->connection()->query($sql);

            return $stm;
        }

        public function addmusique()
        {
            $sql2 = "SELECT album.name as name , artist.name as name1 , Music.* FROM Music JOIN album ON Music.album_id = album.id JOIN artist ON Music.artist_id = artist.id";

            $stmt2 = $this->conn->connection()->query($sql2);
            $count = 1;
            while ($row2 = $stmt2->fetch())
            {
                // $indexx = 1;
                if ($row2['code_vere'] == 1)
                {
                    $id = $row2['id'];
                    echo '
                    <tr class="carte">

                        <td id="id12'.$id.'" data="'.$row2['id'].'">'.$count++.'</td>
                        <td id="date'.$id.'" data="'.$row2['release_date'].'">'.$row2['release_date'].'</td>
                        <td id="title'.$id.'" data="'.$row2['title'].'">'.$row2['title'].'</td>
                        <td id="name1'.$id.'" data="'.$row2['artist_id'].'">'.$row2['name1'].'</td>
                        <td id="name'.$id.'" data="'.$row2['album_id'].'">'.$row2['name'].'</td>
                        <td id="words'.$id.'" data="'.$row2['words'].'">
                            <button type="button" class="btn btn-success btn-rounded" href="#show" onclick="addword('.$row2['id'].')" data-bs-toggle="modal">Show</button></td>
                        <td id="id13'.$id.'" title="'.$row2['id'].'">
                        <!-- <i class="bi bi-trash3-fill">d</i>
                        <i class="bi bi-pencil-fill"></i> -->
                        <button type="button" class="btn btn-danger btn-rounded" href="#delet" data-bs-toggle="modal" onclick="showid('.$row2['id'].')">Delete</button>
                        <button type="button" class="btn btn-warning btn-rounded" href="#modal-t" data-bs-toggle="modal" onclick="show('.$row2['id'].')">Edit</button>
                        </td>
                    </tr>
                    ';
                    
                }
            }
            // $indexx++;
            // return $stm2;
        }

        function statistique($number)
        {
            // global $conn;
            if ($number == 1)
            {
                $sql = "SELECT * FROM `users` WHERE `code_vere` = 1"; 

                $stmt = $this->conn->connection()->query($sql);
                $variable = $stmt->rowCount();
                echo $variable;
            }
            else if($number == 2)
            {
                $sql = "SELECT * FROM `album`"; 

                $stmt = $this->conn->connection()->query($sql);
                $variable = $stmt->rowCount();
                echo $variable;
            }
            else if($number == 3)
            {
                $sql = "SELECT * FROM `Music` WHERE `code_vere` = 1"; 

                $stmt = $this->conn->connection()->query($sql);
                $variable = $stmt->rowCount();
                echo $variable;
            }
            else if ($number == 4)
            {
                $sql = "SELECT * FROM `artist`"; 

                $stmt = $this->conn->connection()->query($sql);
                $variable = $stmt->rowCount();
                echo $variable;

                // if (empty($ret[0]))
                // {
                //     echo 0;
                // }
                // else
                // {
                //     echo $ret[0];
                // }
            }
        }
        

        public function adduser()
        {
            $sql1 = "SELECT * FROM artist";
            $stmt1 = $this->conn->connection()->query($sql1);

            while ($row1 = $stmt1->fetch())
            {
                echo '
                    <option value="'.$row1['id'].'">'.$row1['name'].'</option>
                ';
            }
        }

        public function addalbum()
        {
            $sql2 = "SELECT * FROM album";
            $stmt2 = $this->conn->connection()->query($sql2);

            while ($row2 = $stmt2->fetch())
            {
                echo '
                    <option value="'.$row2['id'].'">'.$row2['name'].'</option>
                ';
            }
        }
        public function test()
        {
            echo "marhba";
        }
    }

?>