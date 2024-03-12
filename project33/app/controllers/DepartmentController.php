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

      if(!empty($_POST['search'])){
          $departments = $this->departmentController->SearchDepartment($_POST['search']);
      }else{
          $departments = $this->departmentController->getAllDepartment();
      }


    include_once '../views/departments/index.blade.php';
  }

  public function DetailDepartmentByID()
  {
      $id = $_GET['id'];
      echo $id;
      include "../views/auth/detaildepartment.php";
      $detaildepartment = $this->departmentController->getDetailDepartmentByID($id);
  }
    public function ViewUpdateDepartment()
    {
        $id = $_GET['id'];
        $viewdepartment = $this->departmentController->getDetailDepartmentByID($id);
        include "../views/auth/updatedepartment.php";
    }
  public function UpdateDepartmentByID(){
      $id = $_POST['id'];
      $name = $_POST['name'];
      $address = $_POST['address'];
      $phone = $_POST['phone'];
      echo $id;
      echo $name;
      $updatedepartment = $this->departmentController->UpdateDepartmentByID($id, $name, $address, $phone);
  }
    public function DeleteDepartment(){
      $id = $_GET['id'];
      $deletedepartment = $this->departmentController->DeleteDepartment($id);
      header('location:../public/index.php?c=department&a=index');
    }

    public function SearchDepartment()
    {
//        $search = $_POST['search'];
//        echo $search;
//        $search = $this->departmentController->SearchDepartment($search);
    }
}