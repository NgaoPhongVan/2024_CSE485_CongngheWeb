<?php
require_once ROOT.'../service/departmentservice.php';

class DepartmentController{
    public function index(){
        $departmentservice = new departmentservice();
        $departments = $departmentservice->Getalldepartment();
        include ROOT.'../view/departments/index.php';
    }
    public function AppDepartment(){
        include ROOT.'../view/departments/adddepartment.php';
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $email = $_POST['email'];
        $AddDepartment = new departmentservice();
        $AddDepart = $AddDepartment->AddDepartment($name,$phone,$address,$email);

    }

}