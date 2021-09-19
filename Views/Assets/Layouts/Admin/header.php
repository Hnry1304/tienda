<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS HEADER -->
    <link rel="stylesheet" href="Views/Assets/Css/Admin/header.css">
    <!-- FIN HEADER -->
    <!--PRODUCTS CSS -->
    <link rel="stylesheet" href="Views/Assets/Css/Admin/products.css">
    <!--END PRODUCTS CSS -->
    <!-- PAGINATIONS -->
    <link rel="stylesheet" href="Views/Assets/Css/Admin/paginations.css">
    <!-- END PAGINATIONS -->
    <link rel="stylesheet" href="Views/Assets/Css/Admin/Create_update.css">
    
</head>

<body>
    <div class="container">
        <div class="header">
            <a href="?class=ViewTienda&function=viewHomePage" class="title">Tienda</a>
            
            <nav class="navegacion">
                <ul>
                    <?php if(isset($_GET['product']) && $_GET['product'] == 'gorras'):?>
                        <li><a href="?class=LogOut&function=logOut">Log Out</a></li>
                        <li><a href="#" class="log_Out">Username</a></li>
                        <li><a href="?class=ViewTienda&function=viewProducts&product=gorras&pagina=1" class="active">Gorras</a></li>
                        <li><a href="?class=ViewTienda&function=viewProducts&product=tazas&pagina=1">Tazas</a></li>
                    <?php elseif(isset($_GET['product']) && $_GET['product'] == 'tazas'):?>
                        <li><a href="?class=LogOut&function=logOut">Log Out</a></li>
                        <li><a href="#" class="log_Out">Username</a></li>
                        <li><a href="?class=ViewTienda&function=viewProducts&product=gorras&pagina=1" >Gorras</a></li>
                        <li><a href="?class=ViewTienda&function=viewProducts&product=tazas&pagina=1" class="active">Tazas</a></li>
                    <?php else: ?>
                        <li><a href="?class=LogOut&function=logOut">Log Out</a></li>
                        <li><a href="#" class="log_Out">Username</a></li>
                        <li><a href="?class=ViewTienda&function=viewProducts&product=gorras&pagina=1">Gorras</a></li>
                        <li><a href="?class=ViewTienda&function=viewProducts&product=tazas&pagina=1">Tazas</a></li>

                    <?php  endif ?>

                </ul>
            </nav>
        </div>
        <div class="clear_fix"></div>