<?php
function getAllCategories(){

    //QUY TRÌNH TRUY VẤN DỮ LIỆU: CRUD
    //C: Create (Thêm mới)
    //R: Read (Xem dữ liệu)
    //U: Update (Cập nhật dữ liệu)
    //D: Delete (Xóa dữ liệu)
//B1. Kết nối Database Server (MySQL)
    $conn = mysqli_connect('localhost:1433', 'root', '23102003', 'tlu_new');
    if (!$conn) {
        die('Không thể kết nối');
    }
//B2. Viết câu SQL
    $sql = "SELECT * FROM categories";
//B3. Thực thi câu SQL
    $result = mysqli_query($conn, $sql);
//B4. Tạo mảng chứa dữ liệu
    $categories = [];
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $categories[] = $row;
        }
    }
//B5. Đóng kết nối
    mysqli_close($conn);
//    echo '<pre>';
//    print_r($categories);
//    echo '</pre>';
    return $categories;
}

function getTopNews(){

    //QUY TRÌNH TRUY VẤN DỮ LIỆU: CRUD
    //C: Create (Thêm mới)
    //R: Read (Xem dữ liệu)
    //U: Update (Cập nhật dữ liệu)
    //D: Delete (Xóa dữ liệu)
//B1. Kết nối Database Server (MySQL)
    $conn = mysqli_connect('localhost:1433', 'root', '23102003', 'tlu_new');
    if (!$conn) {
        die('Không thể kết nối');
    }
//B2. Viết câu SQL
    $sql = "SELECT * FROM news ORDER BY news_id ASC LIMIT 4";
//B3. Thực thi câu SQL
    $result = mysqli_query($conn, $sql);
//B4. Tạo mảng chứa dữ liệu
    $news = [];
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $news[] = $row;
        }
    }
//B5. Đóng kết nối
    mysqli_close($conn);
//    echo '<pre>';
//    print_r($categories);
//    echo '</pre>';
    return $news;
}