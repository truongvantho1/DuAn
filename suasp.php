<?php
include('components/header.php');
include('components/connectdb.php');

$conn = connectdb();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $tensp = $_POST['tensp'];
    $gia = $_POST['gia'];
    $giamgia = $_POST['giamgia'];
    $img = $_POST['img'];

    $query = "UPDATE sanpham SET tensp = ?, gia = ?, giamgia = ?, img = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$tensp, $gia, $giamgia, $img, $id]);

    header('Location: shop.php'); // Quay lại trang shop
    exit();
}

$id = $_GET['id'];
$query = "SELECT * FROM sanpham WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->execute([$id]);
$product = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<div class="container">
    <h2>Sửa Sản Phẩm</h2>
    <form method="POST">
        <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
        <div class="form-group">
            <label for="tensp">Tên Sản Phẩm:</label>
            <input type="text" class="form-control" id="tensp" name="tensp" value="<?php echo $product['tensp']; ?>" required>
        </div>
        <div class="form-group">
            <label for="gia">Giá:</label>
            <input type="number" class="form-control" id="gia" name="gia" value="<?php echo $product['gia']; ?>" required>
        </div>
        <div class="form-group">
            <label for="giamgia"></label>