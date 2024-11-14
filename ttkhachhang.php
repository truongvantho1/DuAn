<?php
include('components/header.php');

// Kiểm tra người dùng đã đăng nhập chưa, nếu chưa chuyển hướng về trang login
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin khách hàng</title>
    <link rel="stylesheet" href="ttkhachhang.css">
</head>

<body>

    <!-- Bao gồm header -->

    <div class="thanhhotro">
        <div class="bg-light py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-0">Thông tin khách hàng</div>
                </div>
            </div>
        </div>
    </div>

    <div class="thongtin">
        <table>
            <tr>
                <td>
                    <div class="chu">
                        <p>Họ Và Tên Khách hàng</p>
                    </div>
                </td>
                <td>
                    <p><?= htmlspecialchars($_SESSION['user']); ?></p>
                    <!-- Sử dụng htmlspecialchars để bảo vệ khỏi XSS -->
                </td>
            </tr>
        </table>
    </div>

    <!-- Phần dịch vụ hỗ trợ vẫn giữ nguyên -->
    <div class="pt">
        <div class="site-section site-section-sm site-blocks-1 border-0" data-aos="fade">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon mr-4 align-self-start">
                            <span class="icon-truck"></span>
                        </div>
                        <div class="text">
                            <h2 class="text-uppercase">Miễn phí Ship</h2>
                            <p>Với những đơn hàng trên 500.000đ chúng tôi sẽ hỗ trợ bạn ship miễn phí, dịch vụ ship tận
                                tình.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon mr-4 align-self-start">
                            <span class="icon-refresh2"></span>
                        </div>
                        <div class="text">
                            <h2 class="text-uppercase">Trả hàng miễn phí</h2>
                            <p>Quý khách vui lòng quay video lúc nhận hàng để được shop hỗ trợ nhé.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon mr-4 align-self-start">
                            <span class="icon-help"></span>
<<<<<<< Updated upstream
                        </div>
=======
</div>
>>>>>>> Stashed changes
                        <div class="text">
                            <h2 class="text-uppercase">Dịch Vụ Hỗ trợ</h2>
                            <p>Phục vụ tận tâm, khách hàng là thượng đế.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('components/footer.php'); ?>
    <!-- Bao gồm phần footer -->
</body>

</html>