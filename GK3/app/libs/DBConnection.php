<?php 
require_once '../configs/config.php';
class DBConnection {
  private $host;
  private $username;
  private $password;
  private $dbname;
  private $conn;

  public function __construct($host, $username, $password, $dbname) {
    $this->host     = DB_HOST;
    $this->username = DB_USER;
    $this->password = DB_PASS;
    $this->dbname   = DB_NAME;

    try {
      $this->conn = new PDO ("mysql:host=$this->host;dbname=$this->dbname;charset=utf8", $this->username, $this->password);
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
  }
  public function getConnection() {
    return $this->conn;
  }
}