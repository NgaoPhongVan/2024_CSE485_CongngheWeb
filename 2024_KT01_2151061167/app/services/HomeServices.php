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
            $sql = "SELECT * FROM clients ORDER BY ClientID DESC;";
            $stmt = $conn->query($sql);
            $userArray = [];
            while ($row = $stmt->fetch()) {
                $client = new User($row['ClientID'], $row['Client'], $row['ProjectName'], $row['Status'], $row['ProjectManager'], $row['HourlyRate'], $row['Budget']);
                $userArray[] = $client;
            }
            return $userArray;
        } catch (PDOException $e) {
            error_log("Error in getAllUser: " . $e->getMessage());
            return [];
        }
    }

    public function createUser($Client, $ProjectName, $Status, $ProjectManager, $HourlyRate, $Budget)
    {
        try {
            $conn = $this->dbConnection->getConnection();
            $sql = "INSERT INTO clients (Client, ProjectName, Status, ProjectManager, HourlyRate, Budget) VALUES (:Client ,:ProjectName, :Status, :ProjectManager, :HourlyRate, :Budget)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':Client', $Client);
            $stmt->bindParam(':ProjectName', $ProjectName);
            $stmt->bindParam(':Status', $Status);
            $stmt->bindParam(':ProjectManager', $ProjectManager);
            $stmt->bindParam(':HourlyRate', $HourlyRate);
            $stmt->bindParam(':Budget', $Budget);
            $stmt->execute();
            header('Location:' . DOMAIN . '?c=home&err=Thêm dữ liệu thành công!');
        } catch (PDOException $e) {
            echo $e->getMessage();
            return "Create user failed";
        }
    }

    public function getUserByID($ClientID)
    {
        try {
            $conn = $this->dbConnection->getConnection();
            $sql = "SELECT * FROM clients WHERE ClientID = :ClientID";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':ClientID', $ClientID);
            $stmt->execute();
            $row = $stmt->fetch();
            $client = [];
            if ($row) {
                $client = new User($row['ClientID'], $row['Client'], $row['ProjectName'], $row['Status'], $row['ProjectManager'], $row['HourlyRate'], $row['Budget']);            }
            return $client;
        } catch (PDOException $e) {
            error_log("Error in getUserByID: " . $e->getMessage());
            return null;
        }
    }

    public function getClientByID($ClientID) {
        $conn = $this->dbConnection->getConnection();
        $sql = "SELECT * FROM clients WHERE ClientID = :ClientID";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam((':ClientID'), $ClientID);
        $stmt->execute();
        $row = $stmt->fetch();
        $client = [];
        if($row) {
            $client = new User($row['ClientID'], $row['Client'], $row['ProjectName'], $row['Status'], $row['ProjectManager'], $row['HourlyRate'], $row['Budget']);        }
        return $client;
    }

    public function updateUser($ClientID, $Client, $ProjectName, $Status, $ProjectManager, $HourlyRate, $Budget)
    {
        try {
            $conn = $this->dbConnection->getConnection();
            $sql = "UPDATE clients SET Client = :Client, ProjectName = :ProjectName, Status = :Status, ProjectManager = :ProjectManager, HourlyRate = :HourlyRate, Budget = :Budget WHERE ClientID = :ClientID";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':ClientID', $ClientID);
            $stmt->bindParam(':Client', $Client);
            $stmt->bindParam(':ProjectName', $ProjectName);
            $stmt->bindParam(':Status', $Status);
            $stmt->bindParam(':ProjectManager', $ProjectManager);
            $stmt->bindParam(':HourlyRate', $HourlyRate);
            $stmt->bindParam(':Budget', $Budget);
            $stmt->execute();
            header('Location:' . DOMAIN . '?c=home&err=Cập nhật dữ liệu thành công!');
        } catch (PDOException $e) {
            echo $e->getMessage();
            return "Update user failed";
        }
    }
    public function deleteUser($ClientID)
    {
        try {
            $conn = $this->dbConnection->getConnection();
            $sql = "DELETE FROM clients WHERE ClientID = :ClientID";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':ClientID', $ClientID);
            $stmt->execute();
            header('Location:' . DOMAIN . '?c=home&err=Xóa dữ liệu thành công!');
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
            $sql = "DELETE FROM clients WHERE ClientID IN ($inQuery);"; 
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