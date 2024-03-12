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
    $departments = $this->departmentController->getAllDepartment();
    include_once '../views/departments/index.blade.php';
  }
}