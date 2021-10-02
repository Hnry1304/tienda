<?php
    $productName = $_SESSION['product'];
    

    $talla = $_POST['talla'];
    $precio = $_POST['precio'];
    $imagen = $_FILES['imagen']['name'];
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
        
        $id = $_SESSION['id'];
        if($opcion == "viewUpdateProduct"){
            header("Location: index.php?class=ViewTienda&function=$opcion&product=$productName&id=$id");
        }else{
            header("Location: index.php?class=ViewTienda&function=$opcion&product=$productName");
        }
    }

    $talla = filter_var($talla, FILTER_SANITIZE_NUMBER_INT);
    $precio = filter_var($precio, FILTER_SANITIZE_NUMBER_INT);
    // $imagen = filter_var($imagen, FILTER_SANITIZE_STRING);
    $color_producto = filter_var($color_producto, FILTER_SANITIZE_STRING);

    //Quitar Numeros y caraceteres especiales en el campo nombre y apellidos
    $talla = preg_replace('([^0-9])', '', $talla);
    $precio = preg_replace('([^0-9])','', $precio);
    // $imagen = preg_replace('([^A-Za-z])','', $imagen);
    $color_producto = preg_replace('([^A-Za-z])', '', $color_producto);