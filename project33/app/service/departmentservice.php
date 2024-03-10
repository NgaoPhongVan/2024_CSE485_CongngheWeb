<?php
    require_once ROOT.'/models/department.php';
    require_once ROOT.'/config/database.php';
    class departmentservice{
        public function Getalldepartment()
        {
            $dbconnection = new DBconnection();
            $conn = $dbconnection->getconnection();
            if($conn){
                $sql = 'SELECT * FROM departments';
                $result = $conn->query($sql);
                $departments = [];
                while($row = $result->fetch()){
                    $department = new department($row['DepartmentID'], $row['DepartmentName'], $row['Address'], $row['Email'],$row['Phone'],$row['Logo'],$row['Website'],$row['ParentDepartmentID']);
                    $departments[] = $department;
                }
                return $departments;
            }

        }

        public function AddDepartment($name ,$phone,$address,$email){
            $DBconnection  = new DBconnection();
            $conn = $DBconnection->getconnection();
            if(!$conn){
//                    '$name','$address','$email','$phone','$logo','$website','$parent'

                    $sql = "INSERT INTO departments(DepartmentName,address,email,phone )VALUES(?,?,?,?,?)";
                    $stmt = mysqli_prepare($conn,$sql);
                    mysqli_stmt_bind_param($stmt,"sssss",$name,$address,$email,$phone);
                    $result = mysqli_stmt_execute($stmt);
                    mysqli_close($conn);
                    return $result;
                }

            }




    }

