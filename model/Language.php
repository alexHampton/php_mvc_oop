<?php

    class Language {
        private $conn;

        public $name;

        public function __construct($db){
            $this->conn = $db;
        }

        public function read() {
            $query =    "SELECT c.name, l.language FROM country c
                        INNER JOIN countrylanguage l
                        ON c.Code = l.CountryCode
                        where l.language LIKE :name
                        and l.isOfficial = true";

            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(':name', "%$this->name%");

            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $stmt->closeCursor();

            return $results;
        }
    }


?>