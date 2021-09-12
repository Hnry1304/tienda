<?php
    require_once 'Models/Alumnos/CrudTienda.php';
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
            $_SESSION['product'] = $_GET['product'];
            $table_name = $_SESSION['product'];

            $username =  $_SESSION['usuario'];
            
            if(!isset($username)){
                header('Location: index.php?class=Login&function=vistaLogin');
            }
            //Paginacion
            require_once 'Paginacion/Paginacion.php';
            
            //Fin Paginacion

            $alumnos = new CrudTienda();
            $alumnos->setTableName($table_name);
            $datos = $alumnos->ReadData($inicio,$postPorPagina);

            require_once 'Views/Tienda/viewProducts.php';            
        }


        public function addStudent(){
            $username =  $_SESSION['usuario'];
            if(!isset($username)){
                header('Location: index.php?class=Login&function=vistaLogin');
            }

            require_once 'Views/Crud/agregarAlumno.php';
        }

        public function vistaUpdate(){
            $id =$_GET['id'];
            if(!isset($id)){
                header('Location: index.php?class=View&function=vistaCrud');
            }

            $_SESSION['id'] = $id;
            require_once('Views/Crud/vistaActualizar.php');
        }
    }