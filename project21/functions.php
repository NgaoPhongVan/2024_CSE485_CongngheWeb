<?php
function getAllContents(){

    //QUY TRÌNH TRUY VẤN DỮ LIỆU: CRUD
    //C: Create (Thêm mới)
    //R: Read (Xem dữ liệu)
    //U: Update (Cập nhật dữ liệu)
    //D: Delete (Xóa dữ liệu)
//B1. Kết nối Database Server (MySQL)
    $conn = mysqli_connect('localhost:1433', 'root', '23102003', 'test');
    if (!$conn) {
        die('Không thể kết nối');
    }
//B2. Viết câu SQL
    $sql = "SELECT * FROM content";
//B3. Thực thi câu SQL
    $result = mysqli_query($conn, $sql);
//B4. Tạo mảng chứa dữ liệu
    $products = [];
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $products[] = $row;
        }
    }
//B5. Đóng kết nối
    mysqli_close($conn);
//    echo '<pre>';
//    print_r($categories);
//    echo '</pre>';
    return $products;
}