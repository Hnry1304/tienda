<?php
    require_once 'Models/Alumnos/CrudAlumno.php';
    
    class CrudController{


        public function validarAlumno(){
            if(!isset($_POST['submit'])){
                header('Location: index.php?class=ViewCrud&function=addStudent');
            }

            require_once 'Validations/registro_validate.php';

            $agregar_alumno = new CrudAlumno();
            
            $agregar_alumno->setNombre($nombre);
            $agregar_alumno->setApellidos($lastName);
            $agregar_alumno->setEdad($edad);
            $agregar_alumno->setSexo($sex);
            $agregar_alumno->setFechaNacimiento($fecha_nacimiento);

            $agregar_alumno->CreateStudent();

            header('Location: index.php?class=ViewCrud&function=addStudent');
        }

        public function Delete(){
            $id = $_GET['id'];
            if(!isset($id)){
                header('Location: index.php?class=ViewCrud&function=addStudent');

            }else{
                //Agregar Comprobacion si existe el alumno en la base de datos....
                $delete = new CrudAlumno();
                $delete->setId($id);
                
                $delete->DeleteStudent();
                header('Location: index.php?class=ViewCrud&function=vistaCrud');
            }
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
            header('Location: index.php?class=ViewCrud&function=vistaCrud');
        }
    }