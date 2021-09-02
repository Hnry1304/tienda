<?php

    class LoginController{

        public function vistaLogin(){
            require_once 'Views/Login/vistaLogin.php';
        }

        public function checkUser(){
            if(!isset($_POST['submit'])){
                header('Location: index.php?class=Login&function=vistaLogin');
            }
            //ENVIAMOS LOS DATOS POST A LA SIGUIENTE URL, 
            //LIMPIAREMOS LOS DATOS DE CARACTERES ESPECIALES
            require_once 'Validations/login_validate.php';
            
    
            echo $username . "</br>";
            echo $contrasena. "</br>";
        }
    }