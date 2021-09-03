<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Views/Assets/Css/crud.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Crud</h1>

            <a href="?class=Login&function=vistaLogin" class="log_Out">Log Out</a>
        </div>
        <a href="#" class="add_estudent">Add New Student</a>
        
        <div class="table">

            <div class="categorias">
                <div class="name">NOMBRE</div>
                <div class="apellidos">APELLIDOS</div>
                <div class="age">EDAD</div>
                <div class="sexo">SEXO</div>
                <div class="fecha_nacimiento">FECHA NACIMIENTO</div>
                <div class="opcion">OPTIONS</div>
            </div>

            <?php foreach($datos as $datos):?>
                <div class="fila">
                    <div class="name"><?= $datos['NAME'];?></div>
                    <div class="apellidos"><?= $datos['LASTNAME'];?></div>
                    <div class="age"><?= $datos['AGE'];?></div>
                    <div class="sexo"><?= $datos['SEX'];?></div>
                    <div class="fecha_nacimiento"><?= $datos['FECHA_NACIMIENTO'];?></div>
                    <div class="opcion">
                        <a href="#">Actualizar </a>
                        <a href="#">Eliminar</a>
                    </div>
                    
                </div>
                <div class="clear_fix"></div>
            <?php endforeach ?>

        </div>

        <!--Paginacion HTML !-->
        <?php require_once 'Views/Paginacion/vistaPaginacion.php'?>
        <!--Fin Paginacion HTML !-->
    </div>
</body>
</html>