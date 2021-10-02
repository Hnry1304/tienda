<?php
    require_once 'Models/DatosModels.php';
    class CrudTienda extends DatosModels{

        public function CreateProduct(){
            $sql = "INSERT INTO ".$this->getTableName()." VALUES(
                NULL,:talla,:precio,:imagen,:color
            )";
            $statement = $this->conexion->prepare($sql);
            
            $statement->execute(array(
                ":talla" => $this->getTamano(),
                ":precio" => $this->getPrecio(),
                ":imagen" => $this->getImagen(),
                ":color" => $this->getColorProducto(),
            ));
            
        }

        public function ReadData($inicio,$fin){

            $sql = "SELECT *FROM ".$this->getTableName()." LIMIT $inicio, $fin";
            $statement = $this->conexion->prepare($sql);
            $statement->execute();

            $datos = $statement->fetchAll();

            return $datos;
        }

        public function UpdateProduct(){
            $sql = "UPDATE ".$this->getTableName()." SET TAMANO = :tamano, PRECIO = :precio, IMAGEN = :imagen, COLOR_PRODUCTO = :color WHERE ID = ".$this->getId();
            $statement = $this->conexion->prepare($sql);

            $statement->execute(array(
                ":tamano" => $this->getTamano(),
                ":precio" => $this->getPrecio(),
                ":imagen" => $this->getImagen(),
                ":color" => $this->getColorProducto(),
            ));
        }

        public function DeleteProduct(){
            $sql = "DELETE FROM ".$this->getTableName()." WHERE ID = :id";
            $statement = $this->conexion->prepare($sql);

            $statement->execute(array(
                ":id" => $this->getId()
            ));
        }
    }