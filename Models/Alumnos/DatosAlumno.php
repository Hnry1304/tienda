<?php
    require_once 'Models/DatosModels.php';
    class DatosAlumno extends DatosModels{

        public function traerDatos($inicio,$fin){

            $sql = "SELECT *FROM alumnos LIMIT $inicio, $fin";
            $statement = $this->conexion->prepare($sql);
            $statement->execute();

            $datos = $statement->fetchAll();

            return $datos;
        }
    }