<?php require_once 'Views/Assets/Layouts/header.php'?>

<a href="?class=Crud&function=addStudent" class="add_estudent">Add New Student</a>

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
                <a href="?class=Crud&function=vistaUpdate&id=<?= $datos['ID'] ?>">Actualizar </a>
                <a href="?class=Crud&function=Delete&id=<?= $datos['ID'] ?>">Eliminar</a>
            </div>
            
        </div>
        <div class="clear_fix"></div>
    <?php endforeach ?>

    <!--Paginacion HTML !-->
    <?php require_once 'Views/Paginacion/vistaPaginacion.php'?>
    <!--Fin Paginacion HTML !-->
</div>


<?php require_once 'Views/Assets/Layouts/footer.php'?>