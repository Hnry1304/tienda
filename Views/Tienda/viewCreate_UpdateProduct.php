<?php require_once 'Views/Assets/Layouts/header.php'?>

<div class="agregar_alumno">
    <a href="?class=ViewTienda&function=viewProducts&product=<?=$_SESSION['product'] ?>&pagina=1" class="back_Crud">Regresar Al Menu</a>

    <?php if(isset($_GET['id'])):?>
        <h1>Actualizar Producto</h1>
    <?php else:?>
        <h1>Agregar Producto</h1>
    <?php endif ?>

    <form action="?class=Crud&function=validarAlumno" method="post">
        <label for="talla">
            Talla:
            <input type="text" name="talla" >
        </label>

        <label for="precio">
            Precio:
            <input type="text" name="precio" >
        </label>

        <label for="imagen">
            Imagen:
            <input type="text" name="imagen" >
        </label>

        <?php if($_SESSION['product'] == 'gorras'):?>
            <label for="Color_Gorra">
                Color Gorra:
                <input type="text" name="colorGorra">
            </label>
        <?php endif  ?>

        <input type="submit" name="submit" value="Agregar">
    </form>

</div>

<?php require_once 'Views/Assets/Layouts/footer.php'?>