<?php
require_once '../services/HomeServices.php';
class HomeController
{
    private $userController;
    public function __construct()
    {
        $this->userController = new UserServices();
        
    }
    public function index()
    {
        $users = $this->userController->getAllUser();
        include_once '../views/home.blade.php';
    }

    public function create()
    {
        include_once '../views/users/create.php';
    }

    public function store()
    {
        if (isset($_POST['Username']) && isset($_POST['Password']) && isset($_POST['Role']) && isset($_POST['EmployeeID'])){
            $Username = $_POST['Username'];
            $Password = $_POST['Password'];
            $Role = $_POST['Role'];
            $EmployeeID = $_POST['EmployeeID'];
            $this->userController->createUser($Username, $Password, $Role, $EmployeeID);
        } 
    }

        
    public function show($UserID)
    {
        $user = $this->userController->getUserByID($UserID);
        include_once '../views/users/show.php';
    }

    public function edit()
    {
        $user = $this->userController->getUserByID($_GET['UserID']);
        include_once '../views/users/update.php';
    }

    public function update()
    {
        if (isset($_POST['UserID']) && isset($_POST['Username']) && isset($_POST['Password']) && isset($_POST['Role']) && isset($_POST['EmployeeID'])){
            $UserID = $_POST['UserID'];
            $Username = $_POST['Username'];
            $Password = $_POST['Password'];
            $Role = $_POST['Role'];
            $EmployeeID = $_POST['EmployeeID'];
            $this->userController->updateUser($UserID, $Username, $Password, $Role, $EmployeeID);
        } 
    }

    public function delete($UserID)
    {
        $this->userController->deleteUser($UserID);
    }
}