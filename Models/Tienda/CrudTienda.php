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

        public function UpdateStudent(){
            $sql = "UPDATE alumnos SET NAME = :name, LASTNAME = :lastName, AGE = :age, SEX = :sex, FECHA_NACIMIENTO = :fecha WHERE ID = ".$this->getId();
            $statement = $this->conexion->prepare($sql);

            $statement->execute(array(
                ":name" => $this->getNombre(),
                ":lastName" => $this->getApellidos(),
                ":age" => $this->getEdad(),
                ":sex" => $this->getSexo(),
                ":fecha" => $this->getFechaNacimiento()
            ));
        }

        public function DeleteStudent(){
            $sql = "DELETE FROM alumnos WHERE ID = :id";
            $statement = $this->conexion->prepare($sql);

            $statement->execute(array(
                ":id" => $this->getId()
            ));
        }
    }