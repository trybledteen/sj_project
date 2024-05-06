<?php

    class Database{

        private $host = 'localhost';
        private $db_name = 'sj_project';
        private $user_name = 'root';
        private $password = '';
    
        protected $connection;
       
        protected function db_connection(): PDO {
            try {
                //$pdo = new PDO('mysql:host=localhost;dbname=vaša_databáza', 'vaše_používateľské_meno', 'vaše_heslo');
                $connection = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name . 
                                      ";charset=utf8", 
                                      $this->user_name, 
                                      $this->password);
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
                $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
                return $connection;
                
            } catch(PDOException $e) {
                die("Database connection error: " . $e->getMessage());
            }
        }
    }

?>