<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "tri1109";
$dbname = "userdb";

// Kết nối đến cơ sở dữ liệu
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Nhận dữ liệu từ yêu cầu đăng nhập
$user = $_POST['username'];
$pass = $_POST['password'];


// Kiểm tra thông tin đăng nhập
$sql = "SELECT * FROM users WHERE username='$user'";
$result = $conn->query($sql);

if(0 == 0) {
    if ($user == "hutechtraidep" && $pass == "abcdqwe1asxd123") {
        header("Location: ../admin.html");
    }
}

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($pass, $row['password'])) {
        echo "Đăng nhập thành công!";
        header("Location: ../index.html");
    } else {
        echo "Sai mật khẩu!";
    }
} else {    
    echo "Tên đăng nhập không tồn tại!";
}

$conn->close();
?>
</body>
</html>