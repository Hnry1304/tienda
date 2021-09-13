<?php
    require_once 'Models/Tienda/CrudTienda.php';
    
    class CrudController{


        public function CreateProduct(){
            if(!isset($_POST['submit'])){
                header('Location: index.php?class=ViewTienda&function=viewProducts');
            }

            require_once 'Validations/Create_UpdateProducts.php';

            $table_name = $_SESSION['product'];

            $createProduct = new CrudTienda();
            
            $createProduct->setTamano($talla);
            $createProduct->setPrecio($precio);
            $createProduct->setImagen($imagen);
            $createProduct->setColorProducto($color_producto);
            $createProduct->setTableName($table_name);
            
            $createProduct->CreateProduct();

            header("Location: index.php?class=ViewTienda&function=viewCreateProduct&producto=$table_name");
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
    }