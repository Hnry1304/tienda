<?php require_once 'Views/Assets/Layouts/Cliente/header.php'?>

    <div class="formulario">

        <span class="text">

        </span>
        <form action="/tienda/Crud/buyProduct/<?=$_GET['id']?>&id=<?=$_GET['id'] ?>" method="post">
            <label for="Name">
                Nombre Cliente:

                <input type="text" name="nombre">
            </label>

            <label for="telephone">
                Numero Telefono:

                <input type="text" name="telefono">
            </label>


            <input type="submit" value="Pay" name="submit">
        </form>

    </div>

<?php require_once 'Views/Assets/Layouts/Cliente/footer.php'?>