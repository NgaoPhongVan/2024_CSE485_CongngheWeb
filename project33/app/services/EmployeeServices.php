<?php

require_once('../libs/DBConnection.php');
require_once('../models/Employee.php');

class EmployeeServices
{
    private $dbConnection;

    public function __construct()
    {
        $this->dbConnection = new DBConnection(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }

    public function getAllEmployee()
    {
        try {
            $conn = $this->dbConnection->getConnection();
            $sql = "SELECT * FROM employees";
            $stmt = $conn->query($sql);
            $employeeArray = [];
            while ($row = $stmt->fetch()) {
                $employee = new Employee($row['EmployeeID'], $row['FullName'], $row['Address'], $row['Email'], $row['MobilePhone'], $row['Position'], $row['DepartmentID']);
                $employeeArray[] = $employee;
            }
            return $employeeArray;
        } catch (PDOException $e) {
            error_log("Error in getAllEmployee: " . $e->getMessage());
            return [];
        }
    }
  }