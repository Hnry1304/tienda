<?php 
    $pagina = isset($_GET['pagina'])? (int)$_GET['pagina'] : 0;
    $postPorPagina = 4;

    $inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0;

    $paginanacion = new PaginacionModel();
    $paginanacion->setTableName($table_name);
    $pagination = $paginanacion->Datos();
    $numeroDatos = $paginanacion->totalDatos();

    $numero_paginacion = $paginanacion->numeroPaginacion($numeroDatos,$postPorPagina);

    if($pagina > $numero_paginacion || $pagina < 1){
        header("Location: index.php?class=ViewCliente&function=viewHomePage&pagina=1");
    }