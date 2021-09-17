<?php
    $_SESSION['product'] = $_GET['product'];
    $table_name = $_SESSION['product'];
    
    if($usuario == 'Henry'){

        $url = 'Views/Tienda/viewProducts.php';
        $paginacion_url = 'Paginacion/Paginacion.php';

    }else{
        $_SESSION['function'] = $_GET['function'];

        $url = 'Views/Clientes/homePage.php';
        $paginacion_url = 'Paginacion/Cliente/paginacion.php';
    }

    // Inicio Paginacion
    require_once "$paginacion_url";
    // Fin Paginacion
