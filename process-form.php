<?php
// Kết nối tới cơ sở dữ liệu
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "duhoc_db";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Lấy dữ liệu từ form
$name = $_POST['name'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$location = $_POST['location'];

// Chuẩn bị câu lệnh SQL
$sql = "INSERT INTO ielts (name, age, phone, email, location) VALUES ('$name', $age, '$phone', '$email', '$location')";

// Thực hiện câu lệnh SQL
if ($conn->query($sql) === TRUE) { 
    echo " Bạn đã đăng ký thành công! Bộ phận tư vấn sẽ liên hệ cho bạn!    ";
} else {
    echo "Lỗi: BẠN ĐÃ ĐĂNG KÝ TRƯỚC ĐÓ RỒI    " . $sql . "<br>" . $conn->error;
}

// Đóng kết nối
$conn->close()
?>
