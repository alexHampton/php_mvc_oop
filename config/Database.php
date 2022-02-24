<?php 
    class Database {
        // private $host = '127.0.0.1';
        // private $db_name = 'world';
        // private $username = 'root';
        //private $password = '';
        private $host = 'eanl4i1omny740jw.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
        private $db_name = 'ie9eexb2umnjakop';
        private $username = 'qx9pzx445wuxx8h9';
        private $password = getenv('PASSWORD');
        private $conn;

        public function connect() {
            $this->conn = null;

            try {
                $this->conn = new PDO("mysql:host={$this->host};dbname={$this->db_name}", $this->username, $this->password); 
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                $error_message = 'Database Error: ';
                $error_message .= $e->getMessage();
                echo $error_message;
                exit('Unable to connect to the database');
            }
            return $this->conn;
        }
    }

