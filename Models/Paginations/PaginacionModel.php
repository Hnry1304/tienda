<?php
    require_once 'Models/DatosModels.php';
    class PaginacionModel extends DatosModels{

        public function Datos(){

            $sql = "SELECT *FROM ".$this->getTableName();
             
            $statement = $this->conexion->prepare($sql);
            $statement->execute();

            $datos = $statement->fetchAll();

            return $datos;
        }

        public function totalDatos(){
            $sql = "SELECT *FROM ".$this->getTableName();
             
            $statement = $this->conexion->prepare($sql);
            $statement->execute();

            $total = $statement->rowCount();

            return $total;
        }

        public function numeroPaginacion($total_alumnos,$postPorPagina){
            $numero_paginacion = $total_alumnos/$postPorPagina;
            $numero_paginacion = ceil($numero_paginacion);

            return $numero_paginacion;
        }
    }
