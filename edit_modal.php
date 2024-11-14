<?php
require_once('database/connect.php');

if (isset($_GET['action']) && $_GET['action'] === 'edit' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $id = mysqli_real_escape_string($conn, $id); // Bảo vệ khỏi SQL Injection
    $sql = "SELECT * FROM products WHERE product_id = $id";
    $get_productID = mysqli_query($conn, $sql);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Products</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
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
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/new.css">
</head>

<body>

    <?php require_once('components/dashboard/sidebar.php') ?>

    <div class="app-content">
        <div class="app-content-header">
            <h1 class="app-content-headerText mb-10" style="margin-bottom:40px;margin-top:20px">SỬA SẢN PHẨM</h1>
        </div>

        <form id="form-edit-product" class="form-edit-product" action="products.php" method="post"
            enctype="multipart/form-data">
            <div class="mb-3">
                <input type="hidden" name="product_id" value="<?= $id ?>">
            </div>
            <?php
            if (mysqli_num_rows($get_productID) > 0) {
                while ($row = mysqli_fetch_assoc($get_productID)) { ?>
                    <div class="mb-3">
                        <label class="form-label">Tên sản phẩm</label>
                        <input required type="text" class="form-control" name="name" placeholder="Tên sản phẩm"
                            value="<?= htmlspecialchars($row['name'], ENT_QUOTES) ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mô tả</label>
                        <input required type="text" class="form-control" name="desc" placeholder="Mô tả"
                            value="<?= htmlspecialchars($row['description'], ENT_QUOTES) ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Giá</label>
                        <input required type="text" class="form-control" name="price" placeholder="Giá"
                            value="<?= htmlspecialchars($row['price'], ENT_QUOTES) ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Số lượng</label>
                        <input required type="text" class="form-control" name="quantity" placeholder="Số lượng"
                            value="<?= htmlspecialchars($row['quantity'], ENT_QUOTES) ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Hình ảnh</label>
                        <input type="file" class="form-control" name="image">
                        <p>Hình ảnh hiện tại: <img id="current-image"
                                src="<?= htmlspecialchars($row['image_url'], ENT_QUOTES) ?>" alt="" width="100" height="100">
                        </p>
                    </div>
            <?php }
            }
            ?>
            <div class="mb-3">
                <button onclick="closeModal()" class="btn btn-danger" type="button"
                    data-bs-dismiss="modal">Đóng</button>
                <button class="btn" style="background-color: #008CBA;color:white" name="update-product"
                    type="submit">Cập nhật sản
                    phẩm</button>
            </div>
        </form>
    </div>

    <script>
        // Thêm các sự kiện xử lý JavaScript nếu cần thiết
        function closeModal() {
            window.location.href = "products.php";
        }
    </script>

</body>

</html>