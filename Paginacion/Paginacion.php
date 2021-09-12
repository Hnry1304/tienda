<?php
    $table_name = $_SESSION['product'];

    $pagina = isset($_GET['pagina'])? (int)$_GET['pagina'] : 0;
    $postPorPagina = 5;

    $inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0;


    $paginacion = new PaginacionModel();

    
    $paginacion->setTableName($table_name);
    $pagination = $paginacion->Datos();
    $numeroDatos = $paginacion->totalDatos();
    
    $numero_paginacion = $paginacion->numeroPaginacion($numeroDatos,$postPorPagina);
        
    if($pagina > $numero_paginacion || $pagina < 1){
        header("Location: index.php?class=ViewTienda&function=viewProducts&product=$table_name&pagina=1");
    }