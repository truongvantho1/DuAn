<?php
session_start();
<<<<<<< Updated upstream
=======
include "database/connect.php";
>>>>>>> Stashed changes
// Kiểm tra nếu có yêu cầu đăng xuất
if (isset($_GET['logout'])) {
    session_destroy(); // Hủy session
    header("Location: index.php"); // Chuyển hướng về trang chủ sau khi đăng xuất
    exit();
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Shoppers &mdash; </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/output.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=logout" />
    <style>
<<<<<<< Updated upstream
        .material-symbols-outlined.logout-icon {
            color: red !important;
            font-size: 24px;
            width: 24px;
            height: 24px;
            margin-top: 18px;
            position: relative;
            top: 3px;
        }

        .person {
            display: flex;
            align-items: center;

        }

        .person p {
            margin-right: 8px;

            font-size: 14px;
            color: #555;
            font-weight: 600;
        }

        .person .icon-person {
            font-size: 24px;
            color: #333;
        }
=======
    .material-symbols-outlined.logout-icon {
        color: red !important;
        font-size: 24px;
        width: 24px;
        height: 24px;
        margin-top: 18px;
        position: relative;
        top: 3px;
    }

    .person {
        display: flex;
        align-items: center;

    }

    .person p {
        margin-right: 8px;

        font-size: 14px;
        color: #555;
        font-weight: 600;
    }

    .person .icon-person {
        font-size: 24px;
        color: #333;
    }
>>>>>>> Stashed changes
    </style>
</head>

<body>

    <div class="site-wrap">
        <header class="site-navbar" role="banner">
            <div class="site-navbar-top p-3">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-6 col-md-4 order-2 order-md-1">
                            <?php include('navbar.php') ?>
                        </div>

                        <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
                            <div class="site-logo">
                                <a href="index.php" class="js-logo-clone">VPT Shoes</a>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 order-3 order-md-3 text-right">
                            <div class="site-top-icons">
                                <ul>
                                    <!-- Hiển thị tên người dùng nếu đã đăng nhập -->
                                    <li class="">
                                        <?php if (isset($_SESSION['user'])): ?>
<<<<<<< Updated upstream
                                            <div class="person">
                                                <p>Chào, <?php echo $_SESSION['user']; ?></p>
                                                <a href="ttkhachhang.php">
                                                    <span class="icon icon-person icon-person"></span>
                                                </a>
                                            </div>
                                        <?php else: ?>
                                            <a href="login.php"><span class="icon icon-person"></span></a>
                                        <?php endif; ?>
                                    </li>

                                    <!-- Đăng xuất nếu đã đăng nhập -->
                                    <?php if (isset($_SESSION['user'])): ?>
                                        <li>
                                            <a href="?logout=true">
                                                <span class="material-symbols-outlined logout-icon">
                                                    logout
                                                </span>
                                            </a>
                                        </li>
=======
                                        <div class="person">
                                            <p>Chào, <?php echo $_SESSION['user']; ?></p>
                                            <a href="ttkhachhang.php">
                                                <span class="icon icon-person icon-person"></span>
                                            </a>
                                        </div>
                                        <?php else: ?>
                                        <a href="login.php"><span class="icon icon-person"></span></a>
                                        <?php endif; ?>
                                    </li>

                                    <!-- Đăng xuất nếu đã đăng nhập -->
                                    <?php if (isset($_SESSION['user'])): ?>
                                    <li>
                                        <a href="?logout=true">
                                            <span class="material-symbols-outlined logout-icon">
                                                logout
                                            </span>
                                        </a>
                                    </li>
>>>>>>> Stashed changes
                                    <?php endif; ?>

                                    <li class="">
                                        <a href="cart.php" class="site-cart">
                                            <span class="icon icon-shopping_cart"></span>
                                            <span class="count">0</span>
                                        </a>
                                    </li>
                                    <li class="d-inline-block d-md-none ml-md-0"><a href="#"
                                            class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>
</body>

</html>