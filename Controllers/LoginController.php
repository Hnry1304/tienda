<?php
    require_once 'Models/Login/ValidarUsuario.php';
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
            
            
            $validacion = new ValidarUsuario();

            $validacion->setUserName($username);
            $validacion->setContrasena($contrasena);

            $valor = $validacion->comprobarUsuario();

            if($valor){
                $_SESSION['usuario'] = $username;
                
                header('Location: index.php?class=ViewTienda&function=viewHomePage');
            }else{
                header('Location: index.php?class=Login&function=vistaLogin');

            }

        }
    }