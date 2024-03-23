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
            $sql = "SELECT * FROM actors";
            $stmt = $conn->query($sql);
            $userArray = [];
            while ($row = $stmt->fetch()) {
                $actor = new User($row['ActorID'], $row['FirstName'], $row['LastName'], $row['LastUpdate']);
                $userArray[] = $actor;
            }
            return $userArray;
        } catch (PDOException $e) {
            error_log("Error in getAllUser: " . $e->getMessage());
            return [];
        }
    }

    public function createUser($FirstName, $LastName, $formattedDateTime)
    {
        try {
            $conn = $this->dbConnection->getConnection();
            $sql = "INSERT INTO actors (FirstName, LastName, LastUpdate) VALUES (:FirstName, :LastName, :LastUpdate)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':FirstName', $FirstName);
            $stmt->bindParam(':LastName', $LastName);
            $stmt->bindParam(':LastUpdate', $formattedDateTime);
            $stmt->execute();
            header('Location:' . DOMAIN . '?c=home');
        } catch (PDOException $e) {
            echo $e->getMessage();
            return "Create user failed";
        }
    }

    public function getUserByID($Username)
    {
        try {
            $conn = $this->dbConnection->getConnection();
            $sql = "SELECT * FROM actors WHERE ActorID = :ActorID";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':ActorID', $Username);
            $stmt->execute();
            $row = $stmt->fetch();
            $actor = [];
            if ($row) {
                $actor = new User($row['ActorID'], $row['FirstName'], $row['LastName'], $row['LastUpdate']);
            }

            return $actor;
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

    public function updateUser($ActorID, $FirstName, $LastName, $formattedDateTime)
    {
        try {
            $conn = $this->dbConnection->getConnection();
            $sql = "UPDATE actors SET FirstName = :FirstName, LastName = :LastName, LastUpdate = :LastUpdate WHERE ActorID = :ActorID";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':ActorID', $ActorID);
            $stmt->bindParam(':FirstName', $FirstName);
            $stmt->bindParam(':LastName', $LastName);
            $stmt->bindParam(':LastUpdate', $formattedDateTime);
            $stmt->execute();
            header('Location:' . DOMAIN . '?c=home');
        } catch (PDOException $e) {
            echo $e->getMessage();
            return "Update user failed";
        }
    }
    
    public function deleteUser($ActorID)
    {
        try {
            $conn = $this->dbConnection->getConnection();
            $sql = "DELETE FROM actors WHERE ActorID = :ActorID";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':ActorID', $ActorID);
            $stmt->execute();
            header('Location:' . DOMAIN . '?c=home');
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
            $sql = "DELETE FROM actors WHERE ActorID IN ($inQuery);"; 
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