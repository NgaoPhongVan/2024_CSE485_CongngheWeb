<?php 
  require_once('../services/EmployeeServices.php');
class EmployeeController {
  private $employeeController;
  public function __construct() {
    $this->employeeController = new EmployeeServices();
  }
  public function index() {
    $employees=$this->employeeController->getAllEmployee();
    include_once '../views/employees/index.blade.php';
  }
}