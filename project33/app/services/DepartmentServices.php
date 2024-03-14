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

    public function SearchDepartment($search)
    {
        $conn = $this->dbConnection->getConnection();
        $sql = "SELECT * FROM departments WHERE DepartmentID LIKE :search OR DepartmentName LIKE :search OR Phone LIKE :search";
        try {
            $stmt = $conn->prepare($sql);
            $search = '%' . $search . '%';
            $stmt->bindParam(':search', $search, PDO::PARAM_STR);
            $stmt->execute();
            $searchdepratments = [];
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $searchdepratment = new department($row['DepartmentID'], $row['DepartmentName'], $row['Address'], $row['Email'], $row['Phone'], $row['Logo'], $row['Website'], $row['ParentDepartmentID']);
                $searchdepratments[] = $searchdepratment;
            }
            return $searchdepratments;
        } catch (PDOException $e) {
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
            $stmt1->bindParam(':id', $id);
            $stmt1->execute();

            $sql2 = "UPDATE departments SET ParentDepartmentID = NULL WHERE ParentDepartmentID = :id";
            $stmt2 = $conn->prepare($sql2);
            $stmt2->bindParam(':id', $id);
            $stmt2->execute();

            $sql3 = "DELETE FROM departments  WHERE DepartmentID = :id";
            $stmt3 = $conn->prepare($sql3);
            $stmt3->bindParam(':id', $id);
            $stmt3->execute();
            $conn->commit();
        } catch (PDOException $e) {
            $e->getMessage();
            $conn->rollBack();
        }
    }
    public function AddDepartment($id, $name, $phone, $email, $departmentID)
    {
        try {
            $conn = $this->dbConnection->getConnection();
            $sql_check = "SELECT * FROM departments WHERE Email = '$email'";
            $stmt_check = $conn->query($sql_check);
            $result = $stmt_check->rowCount();
            if ($result > 0) {
                header("location:../../app/views/departments/adddepartment.blade.php?err='$email' đã tồn tại");
                exit;
            } else {
                $sql = "INSERT INTO departments(DepartmentID, DepartmentName, Email, Phone, ParentDepartmentID) VALUES(:id , :name, :email, :phone, :parent)";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':id', $id);
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':phone', $phone);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':parent', $departmentID);
                $stmt->execute();
                if ($stmt->rowCount() > 0) {
                    echo "them thanh cong";
                }
            }
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}
