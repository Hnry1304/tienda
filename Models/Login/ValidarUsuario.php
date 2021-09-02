<?php   
    require_once 'Models/DatosModels.php';
    class ValidarUsuario extends DatosModels{
        
        private $username;
        private $contrasena;

        public function setUserName($username){
            $this->username = $username;
        }

        public function setContrasena($contrasena){
            $this->contrasena = $contrasena;
        }

        public function getUserName(){
            return $this->username;
        }

        public function getContrasena(){
            return $this->contrasena;
        }

        public function comprobarUsuario(){
            $sql = "SELECT *FROM login WHERE USERNAME = :username AND CONTRASENA = :contrasena";
            
            $statement = $this->conexion->prepare($sql);
            $statement->execute(array(
                ":username" => $this->getUserName(),
                ":contrasena" => $this->getContrasena()
            ));

            $resultado = $statement->fetch();
            $valor = FALSE;

            if($resultado){
                $valor = TRUE;
            }

            return $valor;
        }
    }
