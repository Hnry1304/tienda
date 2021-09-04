<?php
    require_once 'Models/Alumnos/CrudAlumno.php';
    require_once 'Models/Paginations/PaginacionModel.php';
    require_once 'Models/Alumnos/CrudAlumno.php';

    class CrudController{

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

        public function validarAlumno(){
            if(!isset($_POST['submit'])){
                header('Location: index.php?class=Crud&function=addStudent');
            }

            require_once 'Validations/registro_validate.php';

            $agregar_alumno = new CrudAlumno();
            
            $agregar_alumno->setNombre($nombre);
            $agregar_alumno->setApellidos($lastName);
            $agregar_alumno->setEdad($edad);
            $agregar_alumno->setSexo($sex);
            $agregar_alumno->setFechaNacimiento($fecha_nacimiento);

            $agregar_alumno->CreateStudent();

            header('Location: index.php?class=Crud&function=addStudent');
        }

        public function Delete(){
            $id = $_GET['id'];
            if(!isset($id)){
                header('Location: index.php?class=Crud&function=addStudent');

            }else{
                //Agregar Comprobacion si existe el alumno en la base de datos....
                $delete = new CrudAlumno();
                $delete->setId($id);
                
                $delete->DeleteStudent();
                header('Location: index.php?class=Crud&function=vistaCrud');
            }
        }

        public function vistaUpdate(){
            $id =$_GET['id'];
            if(!isset($id)){
                header('Location: index.php?class=Crud&function=vistaCrud');
            }

            $_SESSION['id'] = $id;
            require_once('Views/Crud/vistaActualizar.php');
        }

        public function Update(){
            $id = $_SESSION['id'];
            
            require_once 'Validations/update_validate.php';

            $actualizar_alumno = new CrudAlumno();
            
            $actualizar_alumno->setId($id);
            $actualizar_alumno->setNombre($nombre);
            $actualizar_alumno->setApellidos($lastName);
            $actualizar_alumno->setEdad($edad);
            $actualizar_alumno->setSexo($sex);
            $actualizar_alumno->setFechaNacimiento($fecha_nacimiento);

            $actualizar_alumno->UpdateStudent();
            header('Location: index.php?class=Crud&function=vistaCrud');
        }
    }