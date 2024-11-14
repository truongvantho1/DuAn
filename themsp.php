<?php
include('components/header.php');
include('model/connectdb.php');
$conn = connectdb();

// Xử lý khi người dùng gửi form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Kiểm tra xem các trường có tồn tại trong mảng $_POST và $_FILES không
    if (isset($_POST['tensp'], $_POST['gia'], $_POST['giamgia'], $_POST['iddm'], $_FILES['img'])) {
        $tensp = $_POST['tensp'];
        $gia = $_POST['gia'];
        $giamgia = $_POST['giamgia'];
        $iddm = $_POST['iddm']; // Lấy id danh mục từ form

        // Xử lý upload hình ảnh
        $img = $_FILES['img'];
        $imgName = $img['name'];
        $imgTmpName = $img['tmp_name'];
        $imgSize = $img['size'];
        $imgError = $img['error'];

        // Kiểm tra lỗi
        if ($imgError === 0) {
            // Kiểm tra kích thước file (ví dụ: tối đa 2MB)
            if ($imgSize < 2000000) {
                // Tạo tên file duy nhất để tránh xung đột
                $imgNewName = uniqid('', true) . "." . pathinfo($imgName, PATHINFO_EXTENSION);
                $imgDestination = 'uploads/' . $imgNewName; // Đường dẫn lưu file

                // Di chuyển file từ thư mục tạm đến thư mục uploads
                move_uploaded_file($imgTmpName, $imgDestination);

                // Thêm sản phẩm vào cơ sở dữ liệu
                $query = "INSERT INTO sanpham (tensp, gia, giamgia, img, iddm) VALUES (?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($query);
                $stmt->execute([$tensp, $gia, $giamgia, $imgNewName, $iddm]);
                header('Location: shop.php'); // Quay lại trang shop
                exit();
            } else {
                echo "Kích thước file quá lớn!";
            }
        } else {
            echo "Có lỗi xảy ra trong quá trình tải lên hình ảnh!";
        }
    } else {
        echo "Vui lòng điền đầy đủ thông tin!";
    }
}
?>

<!-- Form thêm sản phẩm -->
<form method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="tensp">Tên Sản Phẩm:</label>
        <input type="text" class="form-control" id="tensp" name="tensp" required>
    </div>
    <div class="form-group">
        <label for="gia">Giá:</label>
        <input type="number" class="form-control" id="gia" name="gia" required>
    </div>
    <div class="form-group">
        <label for="giamgia">Giảm Giá (%):</label>
        <input type="number" class="form-control" id="giamgia" name="giamgia" required>
    </div>
    <div class="form-group">
        <label for="img">Chọn Hình Ảnh:</label>
        <input type="file" class="form-control" id="img" name="img" accept="image/*" required>
    </div>
    <div class="form-group">
        <label for="iddm">Danh Mục:</label>
        <select class="form-control" id="iddm" name="iddm" required>
            <?php
            // Lấy danh sách danh mục từ bảng danhmuc
            $query = "SELECT * FROM danhmuc";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $danhmucs = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($danhmucs as $danhmuc): ?>
                <option value="<?php echo $danhmuc['id']; ?>"><?php echo $danhmuc['tendanhmuc']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Thêm Sản Phẩm</button>
</form>
<?php include('components/footer.php'); ?>