<?php
require_once('../libs/DBConnection.php');
require_once('../models/User.php');
require_once('../models/Employee.php');
class LoginServices
{
    private $dbConnection;

    public function __construct()
    {
        $this->dbConnection = new DBConnection(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }

    public function login($Username, $Password)
    {
    try {
        $conn = $this->dbConnection->getConnection();
        $sql = "SELECT * FROM users WHERE Username = :Username AND Password = :Password";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':Username', $Username);
        $stmt->bindParam(':Password', $Password);
        $stmt->execute();
        $userRow = $stmt->fetch();

        if ($userRow['Role'] == 'admin') {
            session_start();
            $_SESSION['UserID'] = $userRow['UserID'];
            $_SESSION['Username'] = $userRow['Username'];
            $_SESSION['Role'] = $userRow['Role'];
            header('Location:' . DOMAIN . '/?c=department');
        } else if ($userRow['Role'] == 'regular') {
            session_start();
            $_SESSION['UserID'] = $userRow['UserID'];
            $_SESSION['Username'] = $userRow['Username'];
            $_SESSION['Role'] = $userRow['Role'];
            header('Location:' . DOMAIN . '/?c=employee');
        } else {
            header('Location:' . DOMAIN . '/?c=login');
        }

        if ($userRow) {
            // Get the employee information
            $sql = "SELECT * FROM Employees WHERE EmployeeID = :EmployeeID";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':EmployeeID', $userRow['EmployeeID']);
            $stmt->execute();
            $employeeRow = $stmt->fetch();

            if ($employeeRow) {
                session_start();
                $_SESSION['EmployeeID'] = $employeeRow['EmployeeID']; 
                $_SESSION['FullName'] = $employeeRow['FullName']; 
                $_SESSION['Address'] = $employeeRow['Address']; 
                $_SESSION['Email'] = $employeeRow['Email']; 
                $_SESSION['MobilePhone'] = $employeeRow['MobilePhone']; 
                $_SESSION['Position'] = $employeeRow['Position']; 
                $_SESSION['Avatar'] = $employeeRow['Avatar']; 
                $_SESSION['DepartmentID'] = $employeeRow['DepartmentID'];  
            }
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
        return "Login failed";
    }
}

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        header('Location:' . DOMAIN . '?c=login');
    }
}
?>