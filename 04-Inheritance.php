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

        public function  createData()
        {
            $sql = "SELECT * from wp_posts WHERE post_type = 'product' LIMIT 8";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
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
    $product = $dbConn->createData();
    var_dump($product);
