<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$servername = "mysqladmin -u root -pyourpassword processlist";
$username = "root";
$password = "tri1109";
$dbname = "data";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);
header("Location: ../index.html");
// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}


$title = $_POST['title'];
$content = $_POST['content'];
// $url = $_POST['url_pic'];

$sql = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";

$stmt = $conn->prepare($sql);
$stmt->bind_param(1, $title, $content);

// Thực thi câu lệnh
if ($stmt->execute()) {
    echo "Bài viết đã được lưu thành công!";
    header("Location: ../index.html");
} else {
    echo "Lỗi: " . $stmt->error;
}

// Đóng kết nối
$stmt->close();
$conn->close();
?>
</body>
</html>