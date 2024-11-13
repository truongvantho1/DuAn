<?php
function conect()
{
    $host = 'localhost';
    $dbname = 'duan'; // Tên cơ sở dữ liệu của bạn
    $username = 'root'; // Tên đăng nhập MySQL
    $password = ''; // Mật khẩu MySQL

    try {
        // Kết nối đến cơ sở dữ liệu
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo "Kết nối thất bại: " . $e->getMessage();
    }
}
?>