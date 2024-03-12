<?php
    require_once ROOT.'/models/department.php';
    require_once ROOT.'/config/database.php';
    class departmentservice
    {
        public function Getalldepartment()
        {
            $dbconnection = new DBconnection();
            $conn = $dbconnection->getconnection();
            if ($conn) {
                $sql = 'SELECT * FROM departments';
                $result = $conn->query($sql);
                $departments = [];
                while ($row = $result->fetch()) {
                    $department = new department($row['DepartmentID'], $row['DepartmentName'], $row['Address'], $row['Email'], $row['Phone'], $row['Logo'], $row['Website'], $row['ParentDepartmentID']);
                    $departments[] = $department;
                }
//                mysqli_free_result($result);
                return $departments;
            }

        }

        public function AddDepartment($id,$name, $phone, $address, $email) {
            try {
                // Thiết lập chế độ lỗi để PDO ném ra các ngoại lệ nếu có lỗi
                $dbconnection = new DBconnection();
                $conn = $dbconnection->getconnection();
                // Chuẩn bị truy vấn SQL
                $sqlcheck = "SELECT *FROM departments where DepartmentID = '$id' ";
                $result_check = $conn->query($sqlcheck);
                $count_resutl = $result_check->rowCount();
                if($count_resutl > 0){
                    echo "id đã tồn tại";
                    exit;
               }
                $sql = "INSERT INTO departments (DepartmentID,DepartmentName, Phone, Address, Email) VALUES (:id,:name, :phone, :address, :email)";
                $stmt = $conn->prepare($sql);

                // Bind các tham số với giá trị thực
                $stmt->bindParam(':id', $id);
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':phone', $phone);
                $stmt->bindParam(':address', $address);
                $stmt->bindParam(':email', $email);

                // Thực thi truy vấn
                $stmt->execute();

                // Kiểm tra xem có bản ghi nào bị ảnh hưởng không
                if ($stmt->rowCount() > 0) {
                    echo "Thêm bộ phận thành công";
                } else {
                    echo "Không thể thêm bộ phận";
                }
            } catch(PDOException $e) {
                echo "Lỗi: " . $e->getMessage();
            }
        }

        public function  getDepartmentByID($id)
        {
            $dbconnection = new DBconnection();
            $conn = $dbconnection->getconnection();
            if($conn){
                $sql = "SELECT * FROM departments Where DepartmentID = '$id' ";
                $result = $conn->query($sql);
                $row = $result->fetch();
                $dempartmentByID = new department($row['DepartmentID'], $row['DepartmentName'], $row['Address'], $row['Email'], $row['Phone'], $row['Logo'], $row['Website'], $row['ParentDepartmentID']);

                return $dempartmentByID;
            }
        }

        public function updateDepartment($id,$name , $phone ,$address, $email)
        {
            try {
                $dbconnection = new DBconnection();
                $conn = $dbconnection->getconnection();
                $sql = "UPDATE departments SET DepartmentName = :name, Phone = :phone,Address = :address, Email = :email where DepartmentID = :id ";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':id',$id);
                $stmt->bindParam(':name' , $name);
                $stmt->bindparam(':phone',$phone);
                $stmt->bindParam(':address',$address);
                $stmt->bindParam(':email',$email);
                $stmt->execute();
                if ($stmt->rowCount() > 0) {

                } else {
                    echo "Không tìm thấy bộ phận cần cập nhật hoặc không có thay đổi trong dữ liệu";
                }
            }catch (PDOException $ex){
                $ex->getMessage();
        }
        }
        public function DeleteDepartmentById($id)
        {
            $dbconnection = new DBconnection();
            $conn = $dbconnection->getconnection();
            try {
                $conn->beginTransaction();
                $sql_employeeID = 'UPDATE employees SET DepartmentID = NULL WHERE DepartmentID = :id';
                $stmt1 = $conn->prepare($sql_employeeID);
                $stmt1->bindparam(':id', $id);
                $stmt1->execute();

                $sql_ParentID = 'UPDATE departments SET ParentDepartmentID = NULL WHERE ParentDepartmentID = :id';
                $stmt2 = $conn->prepare($sql_ParentID);
                $stmt2->bindparam(':id', $id);
                $stmt2->execute();

                $sql = 'DELETE FROM departments WHERE DepartmentID = :id ';
                $stmt = $conn->prepare($sql);
                $stmt->bindparam(':id',$id);
                $stmt->execute();

                $conn->commit();


            }catch (PDOException $ex){
                $conn->rollBack();
                $ex->getMessage();
            }
        }
    }




