<?php
    $nombre = $_POST['nombre'];
    $lastName = $_POST['lastname'];
    $sex = $_POST['sex'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];

    $nombre = trim($nombre);
    $lastName = trim($lastName);
    $sex = trim($sex);
    $day = trim($day);
    $month = trim($month);
    $year = trim($year);

    if(empty($nombre)|| empty($lastName) || empty($sex) || empty($day) || empty($month) || empty($year)){
        $_SESSION['nombre'] = $nombre;
        $_SESSION['lastname'] = $lastName;
        $_SESSION['sex'] = $sex;
        $_SESSION['day'] = $day;
        $_SESSION['month'] = $month;
        $_SESSION['year'] = $year;

        header("Location: index.php?class=Crud&function=vistaUpdate&id=$id");
    }

    $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    $lastName = filter_var($lastName, FILTER_SANITIZE_STRING);
    $sex = filter_var($sex, FILTER_SANITIZE_STRING);
    $day = filter_var($day, FILTER_SANITIZE_STRING);
    $month = filter_var($month, FILTER_SANITIZE_STRING);
    $year = filter_var($year, FILTER_SANITIZE_STRING);

    //Quitar Numeros y caraceteres especiales en el campo nombre y apellidos
    $nombre = preg_replace('([^A-Za-z])',' ', $nombre);
    $lastName = preg_replace('([^A-Za-z])',' ', $lastName);
    $sex = preg_replace('([^A-Za-z])','', $sex);
    $day = preg_replace('([^0-9])', '', $day);
    $month = preg_replace('([^0-9])', '', $month);
    $year = preg_replace('([^0-9])', '', $year);

    // CONVERTIR LAS LETRAS EN MAYUSCULAS
    $nombre = strtoupper($nombre);
    $lastName = strtoupper($lastName);
    $sex = strtoupper($sex);


    //VALIDACION DE EDAD

    if($day <1 || $day >32 || $month <1 || $month >13 || $year <1990 || $year >2006){
        header("Location: index.php?class=Crud&function=vistaUpdate&id=$id");
    }else{
        //Calcular Edad Alumno
        $anio_actual = date("Y");
        $edad = $anio_actual - $year;

        $fecha_nacimiento = $day."/".$month."/".$year; // 13/04/1998
    }

    // VALIDAR SI SEXO ESTA BIEN
    // SEXO DISPONIBLES MASCULINO 0 FEMENINO
    if($sex != 'MASCULINO' && $sex != 'FEMENINO'){
        header("Location: index.php?class=Crud&function=vistaUpdate&id=$id");
    }
