<?php
    class LogOutController{

        public function logOut(){
            session_destroy();
            header('Location: index.php?class=Login&function=vistaLogin');
        }
    }