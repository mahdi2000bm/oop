<?php 
    class A {
        public function __construct()
        {
            echo "initialzition \n";
        }
        public function __destruct()
        {
            echo "die";
        }
    }
    $ab = new A();