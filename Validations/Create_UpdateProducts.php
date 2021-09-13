<?php
    $productName = $_SESSION['product'];

    $talla = $_POST['talla'];
    $precio = $_POST['precio'];
    $imagen = $_POST['imagen'];
    $color_producto = $_POST['color_producto'];
    
    $talla = trim($talla);
    $precio = trim($precio);
    $imagen = trim($imagen);
    $color_producto = trim($color_producto);
    
    if(empty($talla)|| empty($precio) || empty($imagen) || empty($color_producto)){
        $_SESSION['talla'] = $talla;
        $_SESSION['precio'] = $precio;
        $_SESSION['imagen'] = $imagen;
        $_SESSION['color_producto'] = $color_producto;
        
        header("Location: index.php?class=ViewTienda&function=CreateProduct&product=$productName&pagina=1");
    }

    $talla = filter_var($talla, FILTER_SANITIZE_STRING);
    $precio = filter_var($precio, FILTER_SANITIZE_STRING);
    $imagen = filter_var($imagen, FILTER_SANITIZE_STRING);
    $color_gorra = filter_var($color_gorra, FILTER_SANITIZE_STRING);

    //Quitar Numeros y caraceteres especiales en el campo nombre y apellidos
    $talla = preg_replace('([^0-9])', '', $talla);
    $precio = preg_replace('([^0-9])','', $precio);
    $imagen = preg_replace('([^A-Za-z])','', $imagen);
    $color_gorra = preg_replace('([^A-Za-z])', '', $color_gorra);
