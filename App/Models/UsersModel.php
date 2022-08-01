<?php
    namespace App\Model;

    class UsersModel {
        public static $title = 'Login';
        public function CreateUser($name)
        {
            return $name . '-' . rand(0,250);
        }
    }