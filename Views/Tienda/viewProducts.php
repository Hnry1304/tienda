<?php require_once 'Views/Assets/Layouts/Admin/header.php'?>

<?php
    $_SESSION['product'] = $_GET['product'];
    $table_name = $_SESSION['product'];
?>
<a href="?class=ViewTienda&function=viewCreateProduct&product=<?= $table_name?>" class="add_estudent">Add New Product</a>

<div class="table">

    <?= $_GET['function'] ?>
    <div class="categorias">
        <div class="name">TALLA</div>
        <div class="apellidos">PRECIO</div>
        <div class="age">IMAGEN</div>

        <?php if($table_name == 'gorras'):?>
            <div class="sexo">COLOR GORRA</div>
        <?php else: ?>
            <div class="sexo">COLOR TAZA</div>
        <?php endif ?>

        <div class="opcion">OPTIONS</div>
    </div>

    <?php foreach($datos as $datos):?>
        <div class="fila">
            <div class="name"><?= $datos['TAMANO'];?></div>
            <div class="apellidos"><?= $datos['PRECIO'];?></div>
            <div class="age"><?= $datos['IMAGEN'];?></div>            
            <div class="sexo"><?= $datos['COLOR_PRODUCTO'];?></div>

            <div class="opcion">
                <a href="?class=ViewTienda&function=viewUpdateProduct&id=<?= $datos['ID'] ?>">Actualizar </a>
                <a href="?class=Crud&function=DeleteProduct&id=<?= $datos['ID'] ?>">Eliminar</a>
            </div>
            
        </div>
        <div class="clear_fix"></div>
    <?php endforeach ?>

    <!--Paginacion HTML !-->
    <?php require_once 'Views/Paginacion/vistaPaginacion.php'?>
    <!--Fin Paginacion HTML !-->
</div>


<?php require_once 'Views/Assets/Layouts/Admin/footer.php'?>