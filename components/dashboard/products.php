<?php

$response = "";
$error = [];
if (isset($_POST['add-product'])) {
    $name = trim($_POST['name']);
    $price = $_POST['price'];
    $desc = trim($_POST['desc']);
    $image = $_FILES['image'];
    // Upload file
    $image_name = $image['name'];
    $image_tmp = $image['tmp_name'];
    $image_size = $image['size'];
    $image_error = $image['error'];
    $upload_dir = 'uploads/';
    $upload_file = $upload_dir . $image_name;

    if ($image_error === 0) {
        if (move_uploaded_file($image_tmp, $upload_file)) {
            // Insert into database
            $query = "INSERT INTO products(name, description, price, quantity, image_url) VALUES('$name', '$desc', $price, 10, '$upload_file')";
            $add = mysqli_query($conn, $query);
            if ($add) {
                $response = "Thêm sản phẩm thành công.";
            } else {
                $response = "Thêm sản phẩm thất bại";
            }
        } else {
            $response = "Thêm sản phẩm thất bại";
        }
    } else {
        $response = "Thêm sản phẩm thất bại";
    }
}
if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM products WHERE product_id=$id";
    $delete = mysqli_query($conn, $query);
    if ($delete) {
        $response = "Xóa sản phẩm thành công.";
    } else {
        $response = "Xóa sản phẩm thất bại.";
    }
}
if (isset($_POST['update-product'])) {
    // Lấy thông tin từ form
    $product_id = $_POST['product_id'];
    $name = trim($_POST['name']);
    $desc = trim($_POST['desc']);
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $image = $_FILES['image'];

    // Xử lý upload hình ảnh
    $image_name = $image['name'];
    $image_tmp = $image['tmp_name'];
    $image_error = $image['error'];
    $upload_dir = 'uploads/';
    $upload_file = $upload_dir . $image_name;

    if ($image_error === 0) {
        // Nếu có hình ảnh mới, upload lại
        if (move_uploaded_file($image_tmp, $upload_file)) {
            // Cập nhật sản phẩm trong CSDL
            $query = "UPDATE products SET name='$name', description='$desc', price=$price, quantity=$quantity, image_url='$upload_file' WHERE product_id=$product_id";
            $update = mysqli_query($conn, $query);
            if ($update) {
                $response = "Cập nhật sản phẩm thành công.";
            } else {
                $response = "Cập nhật sản phẩm thất bại.";
            }
        } else {
            $response = "Cập nhật hình ảnh thất bại.";
        }
    } else {
        // Nếu không có hình ảnh mới, chỉ cập nhật các trường khác
        $query = "UPDATE products SET name='$name', description='$desc', price=$price, quantity=$quantity WHERE product_id=$product_id";
        $update = mysqli_query($conn, $query);
        if ($update) {
            $response = "Cập nhật sản phẩm thành công.";
        } else {
            $response = "Cập nhật sản phẩm thất bại.";
        }
    }
}
$query = "SELECT product_id,name,description,price,quantity,image_url FROM products";
$result = mysqli_query($conn, $query);
?>


<div class="app-content">
    <?php require_once('components/dashboard/modal.php'); ?>
    <?php require_once('components/dashboard/edit_modal.php'); ?>
    <?php require_once('components/dashboard/confirm.php'); ?>
    <div class="app-content-header">
        <h1 class="app-content-headerText">Sản phẩm</h1>
        <small style="color: green; font-size: 16px; margin-left: 20px;"><?= $response ?></small>
        <button class=" mode-switch" title="Switch Theme">
            <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
                <defs></defs>
                <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
            </svg>
        </button>

        <button class="app-content-headerButton" data-bs-toggle="modal" data-bs-target="#add-product">Thêm sản
            phẩm</button>
    </div>
    <div class="app-content-actions">
        <input class="search-bar" placeholder="Search..." type="text">
        <div class="app-content-actions-wrapper">
            <div class="filter-button-wrapper">
                <button class="action-button filter jsFilter"><span>Filter</span><svg xmlns="http://www.w3.org/2000/svg"
                        width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-filter">
                        <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3" />
                    </svg></button>
                <div class="filter-menu">
                    <label>Category</label>
                    <select>
                        <option>All Categories</option>
                        <option>Furniture</option>
                        <option>Decoration</option>
                        <option>Kitchen</option>
                        <option>Bathroom</option>
                    </select>
                    <label>Status</label>
                    <select>
                        <option>All Status</option>
                        <option>Active</option>
                        <option>Disabled</option>
                    </select>
                    <div class="filter-menu-buttons">
                        <button class="filter-button reset">
                            Reset
                        </button>
                        <button class="filter-button apply">
                            Apply
                        </button>
                    </div>
                </div>
            </div>
            <button class="action-button list active" title="List View">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-list">
                    <line x1="8" y1="6" x2="21" y2="6" />
                    <line x1="8" y1="12" x2="21" y2="12" />
                    <line x1="8" y1="18" x2="21" y2="18" />
                    <line x1="3" y1="6" x2="3.01" y2="6" />
                    <line x1="3" y1="12" x2="3.01" y2="12" />
                    <line x1="3" y1="18" x2="3.01" y2="18" />
                </svg>
            </button>
            <button class="action-button grid" title="Grid View">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-grid">
                    <rect x="3" y="3" width="7" height="7" />
                    <rect x="14" y="3" width="7" height="7" />
                    <rect x="14" y="14" width="7" height="7" />
                    <rect x="3" y="14" width="7" height="7" />
                </svg>
            </button>
        </div>
    </div>
    <table class="table">
        <thead class="thead-light">
            <tr>

                <th style="width:200px">Tên sản phẩm</th>
                <th style="width:350px">Mô tả</th>
                <th style="width:150px">Giá</th>
                <th style="width:100px">Số lượng</th>
                <th>Ảnh</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Kiểm tra nếu có dữ liệu trả về
            if (mysqli_num_rows($result) > 0) {
                // Duyệt qua từng dòng dữ liệu
                while ($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['description'] ?></td>
                        <td><?= $row['price'] ?></td>
                        <td><?= $row['quantity'] ?></td>
                        <td><img src="<?= $row['image_url'] ?>" alt='' width='50' height='50'></td>
                        <td style="display:flex;gap:8px;cursor:pointer">
                            <a onclick="openEditModal(<?= $row['product_id'] ?>)">Sửa</a>
                            <span>|</span>
                            <a name="delete-product" onclick="return confirm('Bạn muốn xóa sản phẩm này?');"
                                href="?action=delete&id=<?= $row['product_id'] ?>">Xóa</a>
                        </td>
                    </tr>
            <?php }
            } else {
                // Nếu không có dữ liệu
                echo "<tr>
                <td colspan='7'>Không có sản phẩm nào</td>
            </tr>";
            }

            ?>
        </tbody>
    </table>
</div>
<script>
    function openEditModal(productId) {
        // Thay đổi URL
        window.history.pushState(null, "", "?action=edit&id=" + productId);
        $("#edit-product").modal("show");
    }
</script>