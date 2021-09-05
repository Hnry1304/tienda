<?php
    require_once 'Models/Alumnos/CrudAlumno.php';
    require_once 'Models/Paginations/PaginacionModel.php';

    class ViewCrudController{

        public function vistaCrud(){
            $username =  $_SESSION['usuario'];
            if(!isset($username)){
                header('Location: index.php?class=Login&function=vistaLogin');
            }
            //Paginacion
            require_once 'Paginacion/Paginacion.php';
            
            //Fin Paginacion

            $alumnos = new CrudAlumno();
            $datos = $alumnos->ReadData($inicio,$postPorPagina);

            require_once 'Views/Crud/vistaCrud.php';            
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