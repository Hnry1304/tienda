<div class="paginacion">
    <?php if($pagina == 0 || $pagina == 1):?>
        <a href="?class=ViewCliente&function=<?= $_SESSION['function']?>&producto=<?= $_SESSION['producto'] ?>&pagina=<?= $pagina -1 ?>"class="disiable">Back</a>
    <?php else:?>
        <a href="?class=ViewCliente&function=<?= $_SESSION['function']?>&producto=<?= $_SESSION['producto'] ?>&pagina=<?= $pagina -1 ?>">Back</a>
    <?php endif ?>

    <?php for($i=0; $i<$numero_paginacion; $i++): ?>
        <?php if($pagina == $i+1):?>
            <a href="?class=ViewCliente&function=<?= $_SESSION['function']?>&producto=<?= $_SESSION['producto'] ?>&pagina=<?=$i+1 ?>" class="posicion">
                <?= $i+1 ?>
            </a>
        <?php else: ?>
            <a href="?class=ViewCliente&function=<?= $_SESSION['function']?>&producto=<?= $_SESSION['producto'] ?>&pagina=<?=$i+1 ?>">
                <?= $i+1 ?>
            </a>
        <?php endif ?>

    <?php endfor ?>

    <?php if($pagina == $numero_paginacion):?>
        <a href="?class=ViewCliente&function=<?= $_SESSION['function']?>&producto=<?= $_SESSION['producto'] ?>&pagina=<?=$pagina +1 ?>" class="disiable">Next</a>
    <?php else:?>
        <a href="?class=ViewCliente&function=<?= $_SESSION['function']?>&producto=<?= $_SESSION['producto'] ?>&pagina=<?=$pagina +1 ?>">Next</a>
    <?php endif?>
</div>