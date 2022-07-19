<?php 
    class Car
    {
        public string $Body = "Saba 142";
        public string $doors = "4";
        public int $lastik = 4;
        protected int $light = 4;
        private string $dashboardAssets = "kifpol,madarek";

        public function Run()
        {
            echo "Runing";
        }
        public function setLight($param)
        {
            $light = $param;
        }
        public function echolight()
        {
            echo this;
        }
    }
    
    $peraid = new Car();

    $peraid->setLight(8);
    echo $peraid->echolight();

    class Kamion extends Car {
        

    }




