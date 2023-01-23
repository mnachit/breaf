<?php

    require_once(__DIR__ . "./../../config.php");

    class userlist
    {
        public $conn;

        public function __construct()
        {
            $this->conn = new database();
        }

        public function adduser($first,$last,$email,$num_tele,$datebirth,$password,$cPassword,$code)
        {
            $code_ver = "0";
            $sql = "INSERT INTO `users`(`id`, `first`, `last`, `username`, `email`, `num_tele`, `datebirth`, `password`, `cPassword`, `code_vere`, `code`) VALUES (NULL,'$first','$last','mohamed','$email','$num_tele','$datebirth','$password','$cPassword', '$code_ver', '$code')";
            
            $stm = $this->conn->connection()->query($sql);

            return $stm;
        }

        public function test()
        {
            echo "marhba";
        }
    }

?>