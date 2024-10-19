<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "tri1109";
$dbname = "userdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Nhận dữ liệu từ yêu cầu đăng ký
$user = $_POST['username'];
$pass = $_POST['password'];

// Kiểm tra xem người dùng đã tồn tại chưa
$sql = "SELECT * FROM users WHERE username='$user'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Tên đăng nhập đã tồn tại!";
} else {
    $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (username, password) VALUES ('$user', '$hashed_pass')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Đăng ký thành công!";
        header("Location: ../login.html");
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

</body>
</html>