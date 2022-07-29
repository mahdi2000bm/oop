<?php
    class Home
    {
        public static $title = self::class;
        public function __construct()
        {
            echo $this::title;
        }
        public static function returnTitle()
        {
            return self::class;
        }
    }
    class Quiz
    {
        public static $title = self::class;
        public function __construct()
        {
            echo self::class;
        }
        public static function returnTitle()
        {
            return self::class;
        }
    }
    function printType(Type $var = null)
    {
        echo '404!';
    }

    $dyClass = $_GET['dyClass'] ?? '';
    if(class_exists($dyClass))
    {
        $Home = new $dyClass();
    }else{
        echo '404!';
    }    