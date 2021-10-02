<?php
    $_SESSION['product'] = $_GET['product'];
    $table_name = $_SESSION['product'];
    
    if($usuario == 'Henry'){
        $_SESSION['function'] = $_GET['function'];
        $url = 'Views/Tienda/viewProducts.php';
                
        $_SESSION['postPorPagina'] = 5;

    }else{
        $_SESSION['function'] = $_GET['function'];

        $url = 'Views/Clientes/homePage.php';

        $_SESSION['postPorPagina'] = 10;
    }

    // Inicio Paginacion
    require_once 'Paginacion/paginacion.php';
    // Fin Paginacion

    $readDataBase = new CrudTienda();
    $readDataBase->setTableName($table_name);
    $datos = $readDataBase->ReadData($inicio,$postPorPagina);