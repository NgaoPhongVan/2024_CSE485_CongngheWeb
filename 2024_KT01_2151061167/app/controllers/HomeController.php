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
        $Clients = $this->userController->getAllUser();
        include_once '../views/home.blade.php';
    }

    public function create()
    {
        include_once '../views/add.blade.php';
    }

    public function store()
    {
        if (isset($_POST['Client']) && ($_POST['ProjectName']) && isset($_POST['Status']) && isset($_POST['ProjectManager']) && isset($_POST['HourlyRate']) && isset($_POST['Budget'])){
            $Client = $_POST['Client'];
            $ProjectName = $_POST['ProjectName'];
            $Status = $_POST['Status'];
            $ProjectManager = $_POST['ProjectManager'];
            $HourlyRate = $_POST['HourlyRate'];
            $Budget = $_POST['Budget'];
            $this->userController->createUser($Client, $ProjectName, $Status, $ProjectManager, $HourlyRate, $Budget);
        } 
    }

        
    public function show()
    {
        if (isset($_GET['ClientID'])) {
            $ClientID = $_GET['ClientID'];
        }
        $client = $this->userController->getClientByID($ClientID);
        include_once '../views/show.blade.php';
    }

    public function edit()
    {
        $client = $this->userController->getClientByID($_GET['ClientID']);
        include_once '../views/update.blade.php';
    }

    public function update()
    {
        if (isset($_POST['ClientID']) && isset($_POST['Client']) && isset($_POST['ProjectName']) && isset($_POST['Status']) && isset($_POST['ProjectManager']) && isset($_POST['HourlyRate']) && isset($_POST['Budget'])){
            $ClientID = $_POST['ClientID'];
            $Client = $_POST['Client'];
            $ProjectName = $_POST['ProjectName'];
            $Status = $_POST['Status'];
            $ProjectManager = $_POST['ProjectManager'];
            $HourlyRate = $_POST['HourlyRate'];
            $Budget = $_POST['Budget'];
            $this->userController->updateUser($ClientID, $Client, $ProjectName, $Status, $ProjectManager, $HourlyRate, $Budget);
        } 
    }

    public function delete()
    {
        if (isset($_GET['ClientID'])) {
            $ClientID = $_GET['ClientID'];
            $this->userController->deleteUser($ClientID);
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