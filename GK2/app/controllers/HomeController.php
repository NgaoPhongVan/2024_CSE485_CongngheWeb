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
        $Employees = $this->userController->getAllUser();
        include_once '../views/home.blade.php';
    }

    public function create()
    {
        include_once '../views/add.blade.php';
    }

    public function store()
    {
        if (isset($_POST['Name']) && isset($_POST['Email']) && isset($_POST['Address']) && isset($_POST['Phone'])){
            $Name = $_POST['Name'];
            $Email = $_POST['Email'];
            $Address = $_POST['Address'];
            $Phone = $_POST['Phone'];
            $this->userController->createUser($Name, $Email, $Address, $Phone);
        } 
    }

        
    public function show($EmployeeID)
    {
        $user = $this->userController->getUserByID($EmployeeID);
        include_once '../views/add.blade.php';
    }

    public function edit()
    {
        $employee = $this->userController->getEmployeeByID($_GET['EmployeeID']);
        include_once '../views/update.blade.php';
    }

    public function update()
    {
        if (isset($_POST['EmployeeID']) && isset($_POST['Name']) && isset($_POST['Email']) && isset($_POST['Address']) && isset($_POST['Phone'])){
            $EmployeeID = $_POST['EmployeeID'];
            $Name = $_POST['Name'];
            $Email = $_POST['Email'];
            $Address = $_POST['Address'];
            $Phone = $_POST['Phone'];
            $this->userController->updateUser($EmployeeID, $Name, $Email, $Address, $Phone);
        } 
    }

    public function delete()
    {
        if (isset($_GET['EmployeeID'])) {
            $EmployeeID = $_GET['EmployeeID'];
            $this->userController->deleteUser($EmployeeID);
        }
    }

    public function multi_delete()
    {
        if (isset($_GET['chuoi'])) {
            $chuoi = $_GET['chuoi'];
            $this->userController->multi_deleteUser($chuoi);
        }
    }
}