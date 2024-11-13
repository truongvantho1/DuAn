<?php
session_start();
require_once 'model/conect.php'; // Kết nối cơ sở dữ liệu

$error_message = '';

if (isset($_POST['dangnhap'])) {
    $user = $_POST['user'];  // Lấy tên đăng nhập từ form
    $pass = $_POST['pass'];  // Lấy mật khẩu từ form


    try {
        // Kết nối cơ sở dữ liệu
        $conn = conect();

        // Truy vấn để lấy thông tin người dùng từ cơ sở dữ liệu
        $stmt = $conn->prepare("SELECT * FROM login WHERE user = :user");
        $stmt->bindParam(':user', $user);
        $stmt->execute();
        $user_data = $stmt->fetch(PDO::FETCH_ASSOC);

        // Kiểm tra người dùng có tồn tại và mật khẩu có đúng không
        if ($user_data && $pass === $user_data['pass']) {  // So sánh trực tiếp mật khẩu
            // Lưu thông tin người dùng vào session
            $_SESSION['user'] = $user_data['user'];
            $_SESSION['role'] = $user_data['role'];
            header("Location: index.php");  // Chuyển hướng đến trang chính
            exit();
        } else {
            $error_message = "Tên đăng nhập hoặc mật khẩu không đúng!";
        }
    } catch (PDOException $e) {
        $error_message = "Lỗi khi kết nối cơ sở dữ liệu: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link rel="stylesheet" href="css/auth.css">
</head>

<body>
    <div class="main">
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/logo.jpg" alt="Hình đăng nhập"></figure>
                        <a href="signup.php" class="signup-image-link">Tạo tài khoản</a>
                        <a href="index.php" class="signup-image-link">Trang chủ</a>
                    </div>
                    <div class="signin-form">
                        <h2 class="form-title">ĐĂNG NHẬP</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="user"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="user" id="user" placeholder="Tên của bạn" required />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Mật khẩu" required />
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="dangnhap" id="signin" class="form-submit"
                                    value="Đăng Nhập" />
                            </div>
                            <div class="error"><?php echo $error_message; ?></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>