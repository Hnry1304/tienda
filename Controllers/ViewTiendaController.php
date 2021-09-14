<?php
    require_once 'Models/Tienda/CrudTienda.php';
    require_once 'Models/Paginations/PaginacionModel.php';

    class ViewTiendaController{


        public function viewHomePage(){
            $username =  $_SESSION['usuario'];
            if(!isset($username)){
                header('Location: index.php?class=Login&function=vistaLogin');
            }

            require_once 'Views/Tienda/homePage.php';
        }

        public function viewProducts(){
            $username =  $_SESSION['usuario'];
            
            if(!isset($username)){
                header('Location: index.php?class=Login&function=vistaLogin');
            }
            $_SESSION['product'] = $_GET['product'];
            $table_name = $_SESSION['product'];

            if($table_name != 'tazas' && $table_name != 'gorras'){
                header('Location: index.php?class=ViewTienda&function=viewHomePage');
            }

            //Paginacion
            require_once 'Paginacion/Paginacion.php';
            
            //Fin Paginacion

            $alumnos = new CrudTienda();
            $alumnos->setTableName($table_name);
            $datos = $alumnos->ReadData($inicio,$postPorPagina);

            require_once 'Views/Tienda/viewProducts.php';            
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