<?php

    require_once(__DIR__ . "./../../config.php");

    class testUser
    {
        public $conn;

        public function __construct()
        {
            $this->conn = new database();
        }

        public function checkuser($loginemail,$loginpass)
        {
            $sql = "SELECT * FROM `users` WHERE email = '$loginemail' AND password = '$loginpass'";

            $stm = $this->conn->connection()->query($sql);

            return $stm;
        }
        public function adduser()
        {
            $id = 1;
            $sql1 = "SELECT * FROM users";
            $stmt = $this->conn->connection()->query($sql1);

            while ($row = $stmt->fetch())
            {
                echo '
                <tr>
                    <td>'.$id.'</td>
                    <td>'.$row['first'].'</td>
                    <td>'.$row['last'].'</td>
                    <td>@'.$row['username'].'</td>
                    <td>'.$row['email'].'</td>
                </tr>
                ';
                $id++;
            }
        }

        public function updateuser($id,$first,$last,$email,$num_tele,$datebirth,$image)
        {
            $sql = "UPDATE `users` SET `first`='$first',`last`='$last',`email`='$email',`num_tele`='$num_tele',`datebirth`='$datebirth', `photo_pic`='$image' WHERE id = $id";
            $stm = $this->conn->connection()->query($sql);

            return $stm;
        }

        public function test($id)
        {
            $sql = "SELECT * FROM `users` WHERE id = '$id'";

            $stm = $this->conn->connection()->query($sql);

            return $stm;
        }
    }
?>