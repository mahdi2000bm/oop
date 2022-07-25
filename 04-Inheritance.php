<?php 
    class BaseSearch {

        private $db;
        private string $postType;

        public function __construct($type)
        {
            $this->postType = $type;
            $dsn =  'mysql:dbname=wordpress;host=localhost;';
            try {
                $this->db = new PDO($dsn, "root", "");
            } catch (PDOException $result_e) {
                die($result_e);
            }
            
        }

        public function  createData()
        {
            $sql = "SELECT * from wp_posts WHERE post_type = '$this->postType' LIMIT 8";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ); 
        }
        private function readData()
        {
        }
        private functidon UpdateData()
        {
        }
        private function deleteData()
        {

        }
    }

    $dbConn = new BaseSearch('post');
    $post = $dbConn->createData();
    var_dump($post);

    echo "----------------------------------------------";
    
    $dbConnn = new BaseSearch('product');
    $pro = $dbConnn->createData();
    var_dump($pro);
    
