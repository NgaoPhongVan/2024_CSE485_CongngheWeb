<?php
require_once('../libs/DBConnection.php');
require_once('../models/User.php');
// require_once('../models/Employee.php');
class UserServices
{
    private $dbConnection;

    public function __construct()
    {
        $this->dbConnection = new DBConnection(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }

    public function getAllUser()
    {
        try {
            $conn = $this->dbConnection->getConnection();
            $sql = "SELECT * FROM employees";
            $stmt = $conn->query($sql);
            $userArray = [];
            while ($row = $stmt->fetch()) {
                $employee = new User($row['EmployeeID'], $row['Name'], $row['Email'], $row['Address'], $row['Phone']);
                $userArray[] = $employee;
            }
            return $userArray;
        } catch (PDOException $e) {
            error_log("Error in getAllUser: " . $e->getMessage());
            return [];
        }
    }

    public function createUser($Name, $Email, $Address, $Phone)
    {
        try {
            $conn = $this->dbConnection->getConnection();
            $sql = "INSERT INTO employees (Name, Email, Address, Phone) VALUES (:Name, :Email, :Address, :Phone)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':Name', $Name);
            $stmt->bindParam(':Email', $Email);
            $stmt->bindParam(':Address', $Address);
            $stmt->bindParam(':Phone', $Phone);
            $stmt->execute();
            header('Location:' . DOMAIN . '?c=home');
        } catch (PDOException $e) {
            echo $e->getMessage();
            return "Create user failed";
        }
    }

    public function getUserByID($EmployeeID)
    {
        try {
            $conn = $this->dbConnection->getConnection();
            $sql = "SELECT * FROM employees WHERE EmployeeID = :EmployeeID";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':EmployeeID', $EmployeeID);
            $stmt->execute();
            $row = $stmt->fetch();
            $employee = [];
            if ($row) {
                $employee = new User($row['EmployeeID'], $row['Name'], $row['Email'], $row['Address'], $row['Phone']);
            }

            return $employee;
        } catch (PDOException $e) {
            error_log("Error in getUserByID: " . $e->getMessage());
            return null;
        }
    }

    public function getEmployeeByID($EmployeeID) {
        $conn = $this->dbConnection->getConnection();
        $sql = "SELECT * FROM employees WHERE EmployeeID = :EmployeeID";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam((':EmployeeID'), $EmployeeID);
        $stmt->execute();
        $row = $stmt->fetch();
        $employee = [];
        if($row) {
            $employee = new User($row['EmployeeID'], $row['Name'], $row['Email'], $row['Address'], $row['Phone']);
        }
        return $employee;
    }

    public function updateUser($EmployeeID, $Name, $Email, $Address, $Phone)
    {
        try {
            $conn = $this->dbConnection->getConnection();
            $sql = "UPDATE employees SET Name = :Name, Email = :Email, Address = :Address, Phone = :Phone WHERE EmployeeID = :EmployeeID";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':Name', $Name);
            $stmt->bindParam(':Email', $Email);
            $stmt->bindParam(':Address', $Address);
            $stmt->bindParam(':Phone', $Phone);
            $stmt->bindParam(':EmployeeID', $EmployeeID);
            $stmt->execute();
            header('Location:' . DOMAIN . '?c=home');
        } catch (PDOException $e) {
            echo $e->getMessage();
            return "Update user failed";
        }
    }
    public function deleteUser($EmployeeID)
    {
        try {
            $conn = $this->dbConnection->getConnection();
            $sql = "DELETE FROM employees WHERE EmployeeID = :EmployeeID";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':EmployeeID', $EmployeeID);
            $stmt->execute();
            header('Location:' . DOMAIN . '?route=users');
        } catch (PDOException $e) {
            echo $e->getMessage();
            return "Delete user failed";
        }
    }
    public function multi_deleteUser($chuoi)
    {
        try {
            $conn = $this->dbConnection->getConnection();
            $ids = explode(',', $chuoi); 
            $inQuery = implode(',', array_fill(0, count($ids), '?')); 
            $sql = "DELETE FROM employees WHERE EmployeeID IN ($inQuery);"; 
            $stmt = $conn->prepare($sql);
            foreach ($ids as $k => $id) {
                $stmt->bindValue(($k+1), $id); 
            }
            $stmt->execute();
            header('Location:' . DOMAIN . '?c=home');
        } catch (PDOException $e) {
            echo $e->getMessage();
            return "Delete user failed";
        }
    }
}
?>