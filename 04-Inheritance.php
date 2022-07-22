<?php 
    class BaseSearch {
        private $db;
        public function __construct(){

            $conn =  "mysql:dbname='livemap_business';host='localhost'";
            try {
                $connect = new PDO($conn , "root", "");
                echo "OK!";
            } catch (PDOException $result_e) {
                die($result_e);
            }
        } 
    }
    $dbConn = new BaseSearch();