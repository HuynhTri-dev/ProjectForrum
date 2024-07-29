<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// Kiểm tra xem người dùng đã gửi dữ liệu đăng nhập chưa
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['email'];
    $password = $_POST['pass'];

    // Ở đây bạn sẽ so sánh username và password với thông tin trong cơ sở dữ liệu
    // Để đơn giản, chúng ta sẽ giả sử chỉ có một tài khoản với username và password cố định
    if ($username == 'admin' && $password == '123') {
        return '<a href="index.html">';
    } else {
        echo "Tên đăng nhập hoặc mật khẩu không đúng!";
    }
// }
?>
</body>
</html>