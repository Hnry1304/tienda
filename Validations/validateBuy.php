<?php
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    
    $nombre = trim($nombre);
    $telefono = trim($telefono);

    if(empty($nombre) || empty($telefono)){
        header("Location: /tienda/ViewTienda/viewCompra/$id&id=$id");
    }

    $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    $telefono = filter_var($telefono, FILTER_SANITIZE_NUMBER_INT);

    $nombre = preg_replace('([^A-Za-z])','', $nombre);
    $telefono = preg_replace('([^0-9])', '', $telefono);