<?php
    interface ClassX
    {
        public function count($x,$y);
    }

    class MATH implements ClassX
    {
        public function count($x,$y)
        {   
            return $x * $y;
        }
    }

    $calculatemulty = new MATH();
    echo $calculatemulty->count(2,5);

    
