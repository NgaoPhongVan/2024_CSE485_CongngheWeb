<?php
require_once 'config.php';
class dbconnection
{
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $conn;

    public function __construct()
    {
        $this->servername = DB_HOST;
        $this->username = DB_USER;
        $this->password = DB_PASS;
        $this->dbname = DB_NAME;

        try {
            $this->conn = new PDO("mysql:host={$this->servername};dbname={$this->dbname}", $this->username, $this->password);
        } catch (PDOException $e) {
            $this->conn = null;
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }
}
?>
