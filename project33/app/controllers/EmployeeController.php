<?php 
  require_once('../services/EmployeeServices.php');
class EmployeeController {
  private $employeeController;
  public function __construct() {
    $this->employeeController = new EmployeeServices();
  }
  public function index() {
    if(!empty($_POST['search'])){
        $employees=$this->employeeController->searchEmployee($_POST['search']);
    }else{
        $employees=$this->employeeController->getAllEmployee();
    }
      include_once '../views/users/index.blade.php';
  }

}