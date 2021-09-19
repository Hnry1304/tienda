<?php require_once 'Views/Assets/Layouts/Cliente/header.php'?>
<section class="homePage">

    <article class="ofertas">
        <h1>Ofertas</h1>
    </article>

    <article class="productos">
        <h1>Productos</h1>

        <?php foreach($datos as $datos):?>
            <div class="product">
                <div class="photo">
                    <?= $datos['IMAGEN']?>
                </div>
                <p>Precio: $<?= $datos['PRECIO']?>.00</p>
                <div class="option">
                    <a href="#">View</a>
                    <a href="#">Buy</a>
                </div>
            </div>
        <?php endforeach ?>

        <div class="clear_fix"></div>
        <?php require_once 'Views/Paginacion/vistaPaginacion.php' ?>

    </article>
</section>

<?php require_once 'Views/Assets/Layouts/Cliente/footer.php'?>