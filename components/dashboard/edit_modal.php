<?php
$product = null;
$product_id = isset($_GET['action']) && $_GET['action'] === 'edit' && isset($_GET['id']) ? $_GET['id'] : null;;

if ($product_id) {
    if (is_numeric($product_id)) {
        $query = "SELECT * FROM products WHERE product_id = $product_id";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            $product = mysqli_fetch_assoc($result);
        } else {
            header("Location: products.php");
            exit;
        }
    } else {
        header("Location: products.php");
        exit;
    }
}
?>

<form action="product.php" method="post" enctype="multipart/form-data">
    <div class="modal fade" id="edit-product" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <?php if ($product): ?>
                        <input type="hidden" name="product_id" value="<?= $product['product_id'] ?>">
                        <div class="mb-3">
                            <label for="name" class="form-label">Tên sản phẩm</label>
                            <input required type="text" class="form-control" name="name" value="<?= $product['name'] ?>"
                                placeholder="Tên sản phẩm">
                        </div>
                        <div class="mb-3">

                            <label for="desc" class="form-label">Mô tả</label>
                            <input required type="text" class="form-control" name="desc"
                                value="<?= $product['description'] ?>" placeholder="Mô tả">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Giá</label>
                            <input required type="text" class="form-control" name="price" value="<?= $product['price'] ?>"
                                placeholder="Giá">
                        </div>
                        <div class="mb-3">
                            <label for="quantity" class="form-label">Số lượng</label>
                            <input required type="text" class="form-control" name="quantity"
                                value="<?= $product['quantity'] ?>" placeholder="Số lượng">
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Hình ảnh</label>
                            <input type="file" class="form-control" name="image">
                            <p>Hình ảnh hiện tại: <img src="<?= $product['image_url'] ?>" alt="" width="50" height="50">
                            </p>
                        </div>
                    <?php else: ?>
                        <p>Sản phẩm không tồn tại.</p>
                    <?php endif; ?>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-bs-dismiss="modal">Đóng</button>
                    <button class="btn btn-info" type="submit" name="update-product">Cập nhật sản phẩm</button>
                </div>
            </div>
        </div>
    </div>
</form>