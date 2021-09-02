<?php
    
    function controllers_autoload($className){
        include 'Controllers/' . $className . '.php';
    }

    spl_autoload_register('controllers_autoload');

?>