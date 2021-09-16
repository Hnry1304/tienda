<?php
    require_once 'Models/Tienda/CrudTienda.php';
    require_once 'Models/Paginations/PaginacionModel.php';

    class ViewTiendaController{


        public function viewHomePage(){
            isset($_SESSION['usuario']) ? $usuario= 'Henry' : $usuario = '' ;

            if($usuario == 'Henry'){
                require_once 'Views/Tienda/homePage.php';
            }else{
                $table_name = 'topVentas';

                $_SESSION['function'] = $_GET['function'];

                $_SESSION['producto'] = $_GET['producto'];
                //Paginacion
                require_once 'Paginacion/Cliente/paginacion.php';
                //Fin Paginacion
                
                $readDataBase = new CrudTienda();
                $readDataBase->setTableName($table_name);
                $datos = $readDataBase->ReadData($inicio,$postPorPagina);

                require_once 'Views/Clientes/homePage.php';
            }

        }

        public function viewProducts(){
            isset($_SESSION['usuario']) ? $usuario= 'Henry' : $usuario = '' ;
            
            if($usuario == 'Henry'){
                $_SESSION['product'] = $_GET['product'];
                $table_name = $_SESSION['product'];

                $url = 'Views/Tienda/viewProducts.php';
                $paginacion_url = 'Paginacion/Paginacion.php';

            }else{
                $_SESSION['producto'] = $_GET['producto'];
                $table_name = $_SESSION['producto'];

                $url = 'Views/Clientes/homePage.php';
                $_SESSION['function'] = $_GET['function'];
                $paginacion_url = 'Paginacion/Cliente/paginacion.php';
            }

            // Inicio Paginacion
            require_once "$paginacion_url";
            // Fin Paginacion

            $readDataBase = new CrudTienda();
            $readDataBase->setTableName($table_name);
            $datos = $readDataBase->ReadData($inicio,$postPorPagina);

            require_once "$url";
        }


        public function viewCreateProduct(){
            $username =  $_SESSION['usuario'];
            if(!isset($username)){
                header('Location: index.php?class=Login&function=vistaLogin');
            }

            require_once 'Views/Tienda/viewCreate_UpdateProduct.php';
        }

        public function viewUpdateProduct(){
            $username =  $_SESSION['usuario'];
            if(!isset($username)){
                header('Location: index.php?class=Login&function=vistaLogin');
            }
                   
            $id =$_GET['id'];
            if(!isset($id)){
                header('Location: index.php?class=ViewTienda&function=viewHomePage');
            }

            $_SESSION['id'] = $id;
            require_once('Views/Tienda/viewCreate_UpdateProduct.php');
        }
    }