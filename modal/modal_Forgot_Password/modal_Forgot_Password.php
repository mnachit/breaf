<?php
    require_once(__DIR__ . "./../../config.php");

    class editpass
    {
        public $conn;

        public function __construct()
        {
            $this->conn = new database();
        }

        function checkemail($email){

            $sql = "SELECT * FROM `users` WHERE `email` = '$email'"; 

            $stmt = $this->conn->connection()->query($sql);
            $variable = $stmt->rowCount();
            
            return $variable;
        }

        function rest_password($id,$email,$Cemail)
        {
            $sql = "UPDATE `users` SET `password` = '$email', `cPassword` = '$Cemail' WHERE `email` = '$id'";

            $stmt = $this->conn->connection()->query($sql);

            return $stmt;
        }
    }
?>