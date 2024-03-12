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
}
