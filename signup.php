<?php

session_start();

require_once 'model/conect.php';  // Kiểm tra đường dẫn và đảm bảo file conect.php tồn tại

require_once 'model/connectdb.php';  // Kiểm tra đường dẫn và đảm bảo file conect.php tồn tại


$error_message = '';

if (isset($_POST['signup'])) {
    $name = $_POST['name'];  // Lấy tên người dùng từ form
    $address = $_POST['address'];  // Lấy địa chỉ từ form
    $email = $_POST['email'];  // Lấy email từ form
    $pass = $_POST['pass'];  // Lấy mật khẩu từ form
    $re_pass = $_POST['re_pass'];  // Lấy lại mật khẩu từ form

    // Kiểm tra mật khẩu và nhập lại mật khẩu có khớp không
    if ($pass !== $re_pass) {
        $error_message = "Mật khẩu và xác nhận mật khẩu không khớp!";
    } else {
        try {
            // Kết nối cơ sở dữ liệu

            $conn = conect();
            $conn = connectdb();


            // Kiểm tra xem email đã tồn tại trong cơ sở dữ liệu chưa
            $stmt = $conn->prepare("SELECT * FROM login WHERE gmail = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $user_data = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user_data) {
                $error_message = "Email đã được sử dụng!";
            } else {
                // Chèn người dùng vào cơ sở dữ liệu
                $role = 0; // Giả sử vai trò mặc định là 0 (người dùng thường)
                $stmt = $conn->prepare("INSERT INTO login (gmail, address, user, pass, role) VALUES (:email, :address, :name, :pass, :role)");
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':address', $address);
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':pass', $pass); // Lưu mật khẩu dưới dạng văn bản thuần
                $stmt->bindParam(':role', $role); // Gán vai trò mặc định là 0
                $stmt->execute();

                // Chuyển hướng đến trang đăng nhập sau khi đăng ký thành công
                header("Location: login.php");
                exit();
            }
        } catch (PDOException $e) {
            $error_message = "Lỗi khi kết nối cơ sở dữ liệu: " . $e->getMessage();
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng Ký</title>
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/auth.css">
</head>

<body>

    <div class="main">
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">ĐĂNG KÝ</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <<<<<<< Updated upstream <label for="name"><i
                                        class="zmdi zmdi-account material-icons-name"></i></label>
                                    =======
                                    <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                    >>>>>>> Stashed changes
                                    <input type="text" name="name" id="name" placeholder="Tên của bạn" required />
                            </div>
                            <div class="form-group">
                                <label for="address"><i class="zmdi zmdi-map"></i></label>
                                <input type="text" name="address" id="address" placeholder="Địa chỉ" required />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Email của bạn" required />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Mật khẩu" required />
                            </div>
                            <div class="form-group">
                                <label for="re_pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Nhập lại mật khẩu"
                                    required />
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Đăng Ký" />
                            </div>
                            <div class="error"><?php echo $error_message; ?></div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/logo.jpg" alt="Hình đăng ký"></figure>
                        <a href="login.php" class="signup-image-link">Tôi đã là thành viên</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>