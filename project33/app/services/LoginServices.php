<?php
require_once('../libs/DBConnection.php');
require_once('../models/User.php');

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
            $row = $stmt->fetch();
            //check if the user exists in the database and the password is correct 

            if ($row['Role'] == 'admin') {
                session_start();
                $_SESSION['UserID'] = $row['UserID'];
                $_SESSION['Username'] = $row['Username'];
                $_SESSION['Role'] = $row['Role'];
                header('Location:' . DOMAIN . '?c=department');
            } else if ($row['Role'] == 'regular') {
                session_start();
                $_SESSION['UserID'] = $row['UserID'];
                $_SESSION['Username'] = $row['Username'];
                $_SESSION['Role'] = $row['Role'];
                header('Location:' . DOMAIN . '?c=employee');
            } else {
                header('Location:' . DOMAIN . '?c=login');
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