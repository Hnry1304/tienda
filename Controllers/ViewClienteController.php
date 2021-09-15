<?php
    require_once 'Models/Tienda/CrudTienda.php';
    require_once 'Models/Paginations/PaginacionModel.php';
    class ViewClienteController{
     
        public function viewHomePage(){
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

        public function viewProducts(){
            $_SESSION['producto'] = $_GET['producto'];
            $table_name = $_SESSION['producto'];

            $_SESSION['function'] = $_GET['function'];

            //Paginacion
            require_once 'Paginacion/Cliente/paginacion.php';
            //Fin Paginacion
            
            $readDataBase = new CrudTienda();
            $readDataBase->setTableName($table_name);
            $datos = $readDataBase->ReadData($inicio,$postPorPagina);

            require_once 'Views/Clientes/homePage.php';
        }

        public function viewPayProduct(){

        }   
    }