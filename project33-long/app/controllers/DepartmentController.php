<?php
require_once ROOT.'../service/departmentservice.php';
class DepartmentController{
    public function index(){
        $departmentservice = new departmentservice();
        $departments = $departmentservice->Getalldepartment();
        include ROOT.'../view/departments/index.php';
    }
    public function AddDepartment(){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $AddDepartment = new departmentservice();
        $AddDepart = $AddDepartment->AddDepartment($id,$name,$phone,$address,$email);
        header('location:../app/index.php?controller=department&action=index');
    }

    public function getDepartmentByID()
    {
        $id = $_GET['id'];
        $getDepartmentByID = new departmentservice();
        $Getdepartment = $getDepartmentByID->getDepartmentByID($id);
        include ROOT.'../view/departments/updatedepartment.php';
    }

    public function DetailDepartmentByID()
    {
        $id = $_GET['id'];
        $getDepartmentByID = new departmentservice();
        $Getdepartment = $getDepartmentByID->getDepartmentByID($id);
        include ROOT.'../view/departments/detaildepartment.php';
    }
    public function UpdateDepartment()
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $updateDepartment = new departmentservice();
        $UpdateDepar = $updateDepartment->updateDepartment($id , $name , $phone , $address, $email);
        header('location:../app/index.php?controller=department&action=index');
    }
    public function DeleteDepartmentByID(){
        $id = $_GET['id'];
        $DeleteDepartmentByID = new departmentservice();
        $DeleteDepartment = $DeleteDepartmentByID->DeleteDepartmentById($id);
        header('location:../app/index.php?controller=department&action=index');
    }
}
