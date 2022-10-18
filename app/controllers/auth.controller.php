<?php
require_once './app/views/auth.view.php';
require_once './app/models/auth.model.php';

class AuthController {
    private $view;
    private $model;
    
    public function __construct() {
        $this->model = new UserModel();
        $this->view = new AuthView();
    }
    public function showFormLogin(){
        $this->view->showFormLogin();
    }
    public function validateUser(){
        $email = $_POST['email'];
        $password= $_POST['password'];

        //busco el usuario por email
        $user = $this->model->getUserByEmail($email);

        if ($user && password_verify($password, $user->password)){
            //inicio una session para este usuario
            session_start();
            
            $_SESSION['USER_ID'] = $user->id_users;
            $_SESSION['USER_EMAIL'] = $user->email;
            $_SESSION['IS_LOGGED'] = true;
            
            header("Location: " . BASE_URL);

        } else {
            $this->view->showFormLogin("El usuario o la contraseña no existe.");
        }
        
    }
    public function logout(){
        if(session_status() === PHP_SESSION_NONE)session_start();
        session_destroy();
        header("Location: " . BASE_URL);

    }


}