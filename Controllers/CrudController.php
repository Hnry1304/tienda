<?php
    require_once 'Models/Tienda/CrudTienda.php';
    
    class CrudController{


        public function CreateProduct(){

            if(!isset($_POST['submit'])){
                header('Location: index.php?class=ViewTienda&function=viewProducts');
            }

            $opcion = "viewCreateProduct";

            require_once 'Validations/Create_UpdateProducts.php';

            $carpeta_destino = 'imagenes/';
            $archivo_subido = $carpeta_destino . $_FILES['imagen']['name'];
            move_uploaded_file($_FILES['imagen']['tmp_name'], $archivo_subido);


            $table_name = $_SESSION['product'];

            $createProduct = new CrudTienda();
            
            $createProduct->setTamano($talla);
            $createProduct->setPrecio($precio);
            $createProduct->setImagen($imagen);
            $createProduct->setColorProducto($color_producto);
            $createProduct->setTableName($table_name);
            
            $createProduct->CreateProduct();
            header("Location: index.php?class=ViewTienda&function=viewCreateProduct&product=$table_name");
        }


        public function UpdateProduct(){
            $id = $_SESSION['id'];
            $opcion = "viewUpdateProduct";

            require_once 'Validations/Create_UpdateProducts.php';
            
            $table_name = $_SESSION['product'];
            $UpdateProduct = new CrudTienda();
            
            $UpdateProduct->setId($id);
            $UpdateProduct->setTamano($talla);
            $UpdateProduct->setPrecio($precio);
            $UpdateProduct->setImagen($imagen);
            $UpdateProduct->setColorProducto($color_producto);
            $UpdateProduct->setTableName($table_name);
            
            $UpdateProduct->UpdateProduct();
            header("Location: index.php?class=ViewTienda&function=viewUpdateProduct&product=$table_name");
        }

        
        public function DeleteProduct(){
            $id = $_GET['id'];
            $table_name = $_SESSION['product'];
            if(!isset($id)){
                header("Location: index.php?class=ViewTienda&function=viewProducts&product=$table_name&id=$id");

            }else{
                //Agregar Comprobacion si existe el alumno en la base de datos....
                $delete = new CrudTienda();
                $delete->setTableName($table_name);
                $delete->setId($id);
                
                $delete->DeleteProduct();
                header("Location: index.php?class=ViewTienda&function=viewProducts&product=$table_name");
            }
        }

        public function buyProduct(){

            require_once 'Validations/validateBuy.php';

            header("Location: /tienda/ViewTienda/viewCompra/$id&id=$id");
        }
    }