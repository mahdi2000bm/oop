<?php 
    class BaseSearch {
        private $db;

        function __construct(){
            $dsn =  'mysql:dbname=wordpress;host=localhost;';
            try {
                $this->db = new PDO($dsn, "root", "");
                echo "OK";
            } catch (PDOException $result_e) {
                die($result_e);
            }
        }
        
        private function  createData()
        {

        }
        private function readData()
        {

        }
        private function UpdateData()
        {

        }
        private function deleteData()
        {

        }
    }

    $dbConn = new BaseSearch();