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
        $actors = $this->userController->getAllUser();
        include_once '../views/home.blade.php';
    }

    public function create()
    {
        include_once '../views/add.blade.php';
    }

    public function store()
    {
        if (isset($_POST['FirstName']) && isset($_POST['LastName']) && isset($_POST['LastUpdate'])) {
            $FirstName = $_POST['FirstName'];
            $LastName = $_POST['LastName'];
            $dateInput = $_POST['LastUpdate']; // giả sử bạn đã nhận được giá trị từ form
            $dateTime = new DateTime($dateInput);
            $formattedDateTime = $dateTime->format('Y-m-d H:i:s');
            $this->userController->createUser($FirstName, $LastName, $formattedDateTime);
        }
    }

    public function show($UserID)
    {
        $actor = $this->userController->getUserByID($UserID);
        include_once '../views/show.php';
    }

    public function edit()
    {
        $actor = $this->userController->getUserByID($_GET['ActorID']);
        include_once '../views/update.blade.php';
    }

    public function update()
    {
        if (isset($_POST['ID']) && isset($_POST['FirstName']) && isset($_POST['LastName']) && isset($_POST['LastUpdate'])) {
            $ActorID = $_POST['ID'];
            $FirstName = $_POST['FirstName'];
            $LastName = $_POST['LastName'];
            $dateInput = $_POST['LastUpdate'];
            $dateTime = new DateTime($dateInput);
            $formattedDateTime = $dateTime->format('Y-m-d H:i:s');
            $this->userController->updateUser($ActorID, $FirstName, $LastName, $formattedDateTime);
        }
    }

    public function delete()
    {
        if (isset($_GET['ActorID'])) {
            $ActorID = $_GET['ActorID'];
            $this->userController->deleteUser($ActorID);
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
