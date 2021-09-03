<?php
    require_once 'Models/Alumnos/DatosAlumno.php';
    require_once 'Models/Paginations/PaginacionModel.php';
    
    class CrudController{

        public function vistaCrud(){
            $username =  $_SESSION['usuario'];
            if(!isset($username)){
                header('Location: index.php?class=Login&function=vistaLogin');
            }
            //Paginacion
            require_once 'Paginacion/Paginacion.php';
            
            //Fin Paginacion


            $alumnos = new DatosAlumno();
            $datos = $alumnos->traerDatos($inicio,$postPorPagina);

            require_once 'Views/Crud/vistaCrud.php';            
        }
    }