<?php require_once 'Views/Assets/Layouts/Cliente/header.php'?>

<section class="content">
    <div class="photo">
        Photo
    </div>
    
    <div class="photos">
        <a href="#">
            <img src="imagenes/1.jpg" alt="">
        </a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
    </div>

    <div class="information">
        <h2>Informacion Producto</h2>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Nesciunt, atque quisquam perferendis tenetur fuga laborum 
            exercitationem rerum velit, debitis vero maiores voluptatibus
            earum laboriosam accusamus incidunt ab? Accusantium, natus optio.
        </p>
    </div>
    
    <span class="precio">
        Precio $60.00
    </span>

    <div class="features">
        <ul>
            <li>Color Taza</li>
            <li>Tipo Taza</li>
            <li>Taza Imagen</li>
            <li>Envoltura Taza</li>
        </ul>
    </div>

    <div class="cantidad">

        <ul>
            <li>-</li>
            <li>1</li>
            <li>+</li>
        </ul>
    </div>

    <div class="buyProduct">
        <a href="/tienda/ViewTienda/viewCompra/<?= $_GET['id']?>&id=<?= $_GET['id'] ?>">Buy</a>
    </div>

</section>

<?php require_once 'Views/Assets/Layouts/Cliente/footer.php'?>