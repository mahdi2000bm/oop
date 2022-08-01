
<?php
    function autoLoader($nameClass)
    {
        return $nameClass;
    }
    spl_autoload_register($autoLoader);