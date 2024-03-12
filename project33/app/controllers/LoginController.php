<?php

require_once '../services/LoginServices.php';

class LoginController
{
    private $loginServices;

    public function __construct()
    {
        $this->loginServices = new LoginServices();
    }

    public function index()
    {
        include_once '../views/auth/login.php';
    }

    public function login()
    {
        if (isset($_POST['Username']) && isset($_POST['Password'])) {
            $Username = $_POST['Username'];
            $Password = $_POST['Password'];
            $this->loginServices->login($Username, $Password);
        }
    }

    public function logout()
    {
        $this->loginServices->logout();
    }
}
