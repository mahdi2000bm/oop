
<?php
    function autoLoader($class)
    {
        return $class;
    }
    spl_autoload_register('autoLoader');