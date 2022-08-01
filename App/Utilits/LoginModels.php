<?php
    namespace App\Utilitis;

    class LoginModel {
        public static $title = 'Login';
        public function CreateUser($name)
        {
            return $name . '-' . rand(0,250);
        }
    }