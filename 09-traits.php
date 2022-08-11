<?php
    require_once "./traitDb/viewtable.php";

    trait HasLike {  

        public function likeCount($addCount)
        {
            return $addCount + 1;
        }
    }

    class Articles{
        use HasLike;
        public string $Article = "in the database in the database in the database in the database in the database in the database in the database in the database in the database in the database in the database in the database in the database"; 
    }

    $blogPage = new Articles();
    echo $viewCount;
    echo $blogPage->Article;