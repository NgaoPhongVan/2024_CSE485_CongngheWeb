<?php

require_once('../libs/DBConnection.php');
require_once('../models/Department.php');

class DepartmentServices
{
    private $dbConnection;

    public function __construct()
    {
        $this->dbConnection = new DBConnection(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }

    public function getAllDepartment()
    {
        try {
            $conn = $this->dbConnection->getConnection();
            $sql = "SELECT * FROM departments";
            $stmt = $conn->query($sql);
            $departmentArray = [];
            while ($row = $stmt->fetch()) {
                $department = new Department($row['DepartmentID'], $row['DepartmentName'], $row['Address'], $row['Email'], $row['Phone'], $row['Logo'], $row['Website'], $row['ParentDepartmentID']);
                $departmentArray[] = $department;
            }
            return $departmentArray;
        } catch (PDOException $e) {
            error_log("Error in getAllDepartment: " . $e->getMessage());
            return [];
        }
    }

    public function getDetailDepartmentByID($id){
        $conn = $this->dbConnection->getConnection();
        try {
            $sql = "SELECT * FROM departments Where DepartmentID = '$id'";
            $result = $conn->query($sql);
            $row = $result->fetch();
//            ($DepartmentID, $DepartmentName, $Address, $Email, $Phone, $Logo, $Website, $ParentDepartmentID)
            $departmentByID = new department($row['DepartmentID'], $row['DepartmentName'], $row['Address'], $row['Email'], $row['Phone'], $row['Logo'], $row['Website'], $row['ParentDepartmentID']);
            return $departmentByID;
        }catch(PDOException $e){
                $e->getMessage();
        }
    }

    public function UpdateDepartmentByID($id, $name , $address , $phone){
        $conn = $this->dbConnection->getConnection();
        try {
            $sql = "UPDATE departments SET  DepartmentName = :name, Address = :address, Phone = :phone WHERE DepartmentID = :id ";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id' , $id);
            $stmt->bindParam(':name' , $name);
            $stmt->bindParam(':address' , $address);
            $stmt->bindParam(':phone' , $phone);
            $stmt->execute();
            if($stmt->rowCount() > 0){
                echo "update thanh cong";
            }else{
                echo "khong thanh cong";
            }

        }catch(PDOException $e){
            $e->getMessage();
        }
    }
    public function DeleteDepartment($id)
    {
        $conn = $this->dbConnection->getConnection();
        try {
            $conn->beginTransaction();
            $sql1 = "UPDATE employees SET DepartmentID = NULL WHERE DepartmentID = :id";
            $stmt1 = $conn->prepare($sql1);
            $stmt1->bindParam(':id',$id);
            $stmt1->execute();

            $sql2 = "UPDATE departments SET ParentDepartmentID = NULL WHERE ParentDepartmentID = :id";
            $stmt2 = $conn->prepare($sql2);
            $stmt2->bindParam(':id' , $id);
            $stmt2->execute();

            $sql3 = "DELETE FROM departments  WHERE DepartmentID = :id";
            $stmt3 = $conn->prepare($sql3);
            $stmt3->bindParam(':id' , $id);
            $stmt3->execute();
            $conn->commit();

        }catch(PDOException $e){
            $e->getMessage();
            $conn->rollBack();
        }
    }


}
