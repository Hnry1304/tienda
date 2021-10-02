<?php require_once 'Views/Assets/Layouts/Cliente/header.php'?>
<section class="homePage">

    <article class="ofertas">
        <h1>Ofertas</h1>
    </article>

    <article class="productos">

        <?php foreach($datos as $datos):?>
            <div class="product">
                <div class="photo">
                    <?= $datos['IMAGEN']?>
                </div>
                <p>Precio: $<?= $datos['PRECIO']?>.00</p>
                <div class="option">
                    <a href="/tienda/ViewTienda/viewProductInformation/<?= $datos['ID'] ?>&id=<?= $datos['ID']?>">View</a>
                    <a href="/tienda/ViewTienda/viewCompra/<?= $datos['ID'] ?>&id=<?= $datos['ID'] ?>">Buy</a>
                </div>
            </div>
        <?php endforeach ?>

        <?php require_once 'Views/Paginacion/vistaPaginacion.php' ?>

    </article>
</section>

<?php require_once 'Views/Assets/Layouts/Cliente/footer.php'?>