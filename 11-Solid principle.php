<?php
    class Auth{
        private $username;
        private $password = "6669619";
        public $currentUser = "";

        public function __construct($name){  
            $this->currentUser = $name;
        }
        private static function setIdUser($arr){
            
            echo "currentUser" . rand(0,255);
        }

        private function login($arr) { 
            "user {$this->currentUser} is Logeed!";
        }

        public function displayName() {  

        }
        public function __get($param){
            return $this->{$param};
        }
        public function __set($param,$pass){
            $this->{$param} = $pass; 
        }
        public function __call($method,$args) {
            $this->{$method}($args);
        }
        public static function __callStatic($method,$args) {
            self::$method($args);
        }

    }

    $login = new Auth('reza'); 
    $pass = "mahdi";
    $password = password_hash($pass,PASSWORD_BCRYPT);
    $login->password = $password;

    $login->login("mhdibaqri","mhdibaqri039");

    $login::setIdUser($pass);
