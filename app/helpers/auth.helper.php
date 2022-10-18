<?php
class AuthHelper {
       /**
     * Verifica que el user este logueado y si no lo está
     * lo redirige al login.
     */
    public function checkLoggeIn(){
        session_start();
    
       if(!isset($_SESSION['USER_EMAIL'])){
           return false;
        }
            return true;
    }


}