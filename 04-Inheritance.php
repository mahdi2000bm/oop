<?php 
    class BaseSearch {
        private $db;
        private $dbConfig = [
            'hostname' => 'localhost',
            'username' => 'root',
            'password' => '',
            'dbname' => 'wordpress'
        ];
        public function __construct(){

            $dsn =  "mysql:dbname=wordpress;host=localhost;";
            try {
                $this->db = new PDO($dsn, "root", "");
                echo "OK";
            } catch (PDOException $result_e) {
                die($result_e);
            }
        } 
    }
    $dbConn = new BaseSearch();