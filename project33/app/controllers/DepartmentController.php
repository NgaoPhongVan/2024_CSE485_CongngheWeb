<?php
require_once('../services/DepartmentServices.php');
class DepartmentController
{
  private $departmentController;
  public function __construct()
  {
    $this->departmentController = new DepartmentServices();
  }
  public function index()
  {
    if (!empty($_POST['search'])) {
      $departments = $this->departmentController->SearchDepartment($_POST['search']);
    } else {
      $departments = $this->departmentController->getAllDepartment();
    }
    include_once '../views/departments/index.blade.php';
  }
  public function DeleteDepartment()
  {
    $id = $_GET['id'];
    $departments = $this->departmentController->DeleteDepartment($id);
    header('location:../public/index.php?c=department&a=index');
  }
  public function GetID()
  {
    $departments = $this->departmentController->getAllDepartment();

    include_once '../views/departments/adddepartment.blade.php';
  }
  public function addDepartment()
  {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $id = $_POST['id'];
      $name = $_POST['name'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $departmentID = $_POST['departmentID'];
      echo $id;
      echo $name;
      echo $email;
      echo " ";
      echo $phone;
      echo " ";
      echo $departmentID;
      $add = $this->departmentController->AddDepartment($id, $name, $phone, $email, $departmentID);
    }
  }
}