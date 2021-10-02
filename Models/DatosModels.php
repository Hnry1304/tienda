<?php
    class DatosModels{

        private $id;
        private $tamano;
        private $precio;
        private $imagen;
        private $color_producto;
        private $table_name;

        protected $conexion;


        public function __construct(){
            $this->conexion = new Database();
            $this->conexion = $this->conexion->connect();
        }

        public function setId($id){
            $this->id = $id;
        }

        public function setTamano($tamano){
            $this->tamano = $tamano;
        }

        public function setPrecio($precio){
            $this->precio = $precio;
        }

        public function setImagen($imagen){
            $this->imagen = $imagen;
        }

        public function setColorProducto($color_producto){
            $this->color_producto = $color_producto;
        }
        
        public function setTableName($table_name){
            $this->table_name = $table_name;
        }

        public function getId(){
            return $this->id;
        }

        public function getTamano(){
            return $this->tamano;
        }

        public function getPrecio(){
            return $this->precio;
        }

        public function getImagen(){
            return $this->imagen;
        }

        public function getColorProducto(){
            return $this->color_producto;
        }

        public function getTableName(){
            return $this->table_name;
        }
    }