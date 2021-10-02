<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=base_url ?>Views/Assets/Css/Cliente/header.css">
    <link rel="stylesheet" href="<?=base_url ?>Views/Assets/Css/Cliente/homePage.css">
    <link rel="stylesheet" href="<?=base_url ?>Views/Assets/Css/Cliente/paginations.css">
    <link rel="stylesheet" href="<?=base_url ?>Views/Assets/Css/Cliente/mediaQuery.css">
    <link rel="stylesheet" href="<?=base_url ?>Views/Assets/Css/Cliente/productInformation.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <a href="/tienda/ViewTienda/viewHomePage/home&pagina=1" class="title">Clientes</a>

            <nav class="barra_navegacion">
                <ul>
                    <li>
                        <a href="#" class="menu">Menu</a>

                        <ul class="submenu">
                            <li><a href="/tienda/ViewTienda/viewProducts/gorras&pagina=1">Gorras</a></li>
                            <li><a href="/tienda/ViewTienda/viewProducts/tazas&pagina=1">Tazas</a></li>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Settings</a></li>
                            <li><a href="?class=Login&function=vistaLogin">Login</a></li>
                        </ul>
                        
                    </li>
                </ul>
            </nav>
        </div>