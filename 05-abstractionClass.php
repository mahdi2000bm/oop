<?php
    abstract class baseCar
    {   
        protected string $car;
        public function __construct($name)
        {
            $this->car = $name;
        }
        abstract public function carOption();
    }

    class Bmw extends baseCar
    {
        public function carOption(){
            return "this car in $this->car";
        }
    }
    $BMW = new Bmw("s");
    $BMW->carOption();

    class BENZ extends Bmw
    {

    }

    $BMW = new BENZ("BENZ");
    echo $BMW->carOption();