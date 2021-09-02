<?php
    $username = $_POST['username'];
    $contrasena = $_POST['contrasena'];

    $username = trim($username);
    $contrasena = trim($contrasena);

    if(empty($username)|| empty($contrasena)){
        header('Location: index.php?class=Login&function=vistaLogin');
    }
    $username = filter_var($username, FILTER_SANITIZE_STRING);
    $contrasena = filter_var($contrasena, FILTER_SANITIZE_STRING);
    