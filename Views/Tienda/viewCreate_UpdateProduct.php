<?php require_once 'Views/Assets/Layouts/Admin/header.php'?>

<div class="agregar_alumno">
    <a href="?class=ViewTienda&function=viewProducts&product=<?=$_SESSION['product'] ?>&pagina=1" class="back_Crud">Regresar Al Menu</a>

    <?php if(isset($_GET['id'])):?>
        <h1>Actualizar Producto</h1>
    <?php else:?>
        <h1>Agregar Producto</h1>
    <?php endif ?>

    <?php if($_GET['function'] == 'viewUpdateProduct' ? $option = "UpdateProduct" :$option = "CreateProduct")?>


    <form action="?class=Crud&function=<?=$option?>" method="post">
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

        <label for="Color_Producto">
            Color Producto:
            <input type="text" name="color_producto">
        </label>
        
        <input type="submit" name="submit" value="Agregar">
    </form>

</div>

<?php require_once 'Views/Assets/Layouts/Admin/footer.php'?>