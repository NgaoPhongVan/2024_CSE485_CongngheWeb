<?php
require_once('../libs/DBConnection.php');
require_once('../models/User.php');
require_once('../models/Employee.php');
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
            $sql = "SELECT * FROM users";
            $stmt = $conn->query($sql);
            $userArray = [];
            while ($row = $stmt->fetch()) {
                $user = new User($row['Username'], $row['Password'], $row['Role'], $row['EmployeeID']);
                $userArray[] = $user;
            }
            return $userArray;
        } catch (PDOException $e) {
            error_log("Error in getAllUser: " . $e->getMessage());
            return [];
        }
    }

    public function createUser($Username, $Password, $Role, $EmployeeID)
    {
        try {
            $conn = $this->dbConnection->getConnection();
            $sql = "INSERT INTO users (Username, Password, Role, EmployeeID) VALUES (:Username, :Password, :Role, :EmployeeID)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':Username', $Username);
            $stmt->bindParam(':Password', $Password);
            $stmt->bindParam(':Role', $Role);
            $stmt->bindParam(':EmployeeID', $EmployeeID);
            $stmt->execute();
            header('Location:' . DOMAIN . '?route=users');
        } catch (PDOException $e) {
            echo $e->getMessage();
            return "Create user failed";
        }
    }

    public function getUserByID($Username)
    {
        try {
            $conn = $this->dbConnection->getConnection();
            $sql = "SELECT * FROM users WHERE Username = :Username";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':Username', $Username);
            $stmt->execute();
            $row = $stmt->fetch();
            $user = [];
            if ($row) {
                $user = new User($row['Username'], $row['Password'], $row['Role'], $row['EmployeeID']);
            }

            return $user;
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
            $employee = new Employee($row['EmployeeID'], $row['FullName'], $row['Address'], $row['Email'], $row['MobilePhone'], $row['Position'], $row['DepartmentID']);
        }
        return $employee;
    }

    public function updateUser($Username, $Password, $Role, $EmployeeID)
    {
        try {
            $conn = $this->dbConnection->getConnection();
            $sql = "UPDATE users SET Username = :Username, Password = :Password, Role = :Role, EmployeeID = :EmployeeID WHERE Username = :Username";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':Username', $Username);
            $stmt->bindParam(':Password', $Password);
            $stmt->bindParam(':Role', $Role);
            $stmt->bindParam(':EmployeeID', $EmployeeID);
            $stmt->execute();
            header('Location:' . DOMAIN . '?route=users');
        } catch (PDOException $e) {
            echo $e->getMessage();
            return "Update user failed";
        }
    }
    public function deleteUser($Username)
    {
        try {
            $conn = $this->dbConnection->getConnection();
            $sql = "DELETE FROM users WHERE Username = :Username";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':Username', $Username);
            $stmt->execute();
            header('Location:' . DOMAIN . '?route=users');
        } catch (PDOException $e) {
            echo $e->getMessage();
            return "Delete user failed";
        }
    }
}
?>