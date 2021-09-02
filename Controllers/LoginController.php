<?php

    class LoginController{

        public function vistaLogin(){
            require_once 'Views/Login/vistaLogin.php';
        }

        public function checkUser(){
            if(!isset($_POST['submit'])){
                header('Location: index.php?class=Login&function=vistaLogin');
            }
            
            var_dump($_POST);

        }
    }