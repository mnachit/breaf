<?php
    session_start();
    class database{
        public $host = "localhost";
        public $user = "root";
        public $pass = "";
        public $dbname = "E-Lyrics";

        public function connection()
        {
            try
            {
                $dsn = 'mysql:host='.$this->host.';dbname='.$this->dbname;
                $pdo = new PDO($dsn, $this->user, $this->pass);

                return $pdo;
            }
            catch (PDOException $e)
            {
                echo "Euror : ".$e->getMessage();
            }
        }
    }
?>