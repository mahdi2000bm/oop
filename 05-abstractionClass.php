<?php
    abstract class baseCar
    {   
        protected string $car;
        public function __cunstract($name)
        {
            $this->$car = $name;
        }
        abstract protected function carOption();
    }
    class Bmw extends baseCar
    {
        protected function carOption(){
            return "this car in $this->name";
        }
    }
    $BMW = new Bmw("BMW");