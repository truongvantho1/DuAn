<?php
include('components/header.php');
include('model/connectdb.php');
$conn = connectdb();

// Xử lý khi người dùng gửi form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Kiểm tra xem trường tên danh mục có tồn tại trong mảng $_POST không
    if (isset($_POST['tendm'], $_POST['douutien'])) {
        $tendm = $_POST['tendm'];
        $douutien = $_POST['douutien'];

        // Thêm danh mục vào cơ sở dữ liệu
        $query = "INSERT INTO danhmuc (tendm, douutien) VALUES (?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->execute([$tendm, $douutien]);
        header('Location: shop.php'); // Quay lại trang shop
        exit();
    } else {
        echo "Vui lòng điền đầy đủ thông tin!";
    }
}
?>

<!-- Form thêm danh mục -->
<div class="container">
    <h2 class="text-black h5">Thêm Danh Mục</h2>
    <form method="POST">
        <div class="form-group">
            <label for="tendm">Tên Danh Mục:</label>
            <input type="text" class="form-control" id="tendm" name="tendm" required>
        </div>
        <div class="form-group">
            <label for="douutien">Độ Ưu Tiên:</label>
            <input type="number" class="form-control" id="douutien" name="douutien" required>
        </div>
        <button type="submit" class="btn btn-primary">Thêm Danh Mục</button>
    </form>
</div>

<?php include('components/footer.php'); ?>