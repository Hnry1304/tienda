<?php
    $nombre = $_POST['nombre'];
    $lastName = $_POST['lastname'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $fecha_nacimiento = $_POST['fechaNacimiento'];

    $nombre = trim($nombre);
    $lastName = trim($lastName);
    $age = trim($age);
    $sex = trim($sex);
    $fecha_nacimiento = trim($fecha_nacimiento);


    if(empty($nombre)|| empty($lastName) || empty($age) || empty($sex) || empty($fecha_nacimiento)){
        $_SESSION['nombre'] = $nombre;
        $_SESSION['lastname'] = $lastName;
        $_SESSION['age'] = $age;
        $_SESSION['sex'] = $sex;
        $_SESSION['fecha'] = $fecha_nacimiento;
        header('Location: index.php?class=Crud&function=addStudent');
    }

    $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    $lastName = filter_var($lastName, FILTER_SANITIZE_STRING);