<?php
include "database/connect.php";

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql3 = "SELECT * FROM products WHERE product_id = '$id'";
        $get_product = mysqli_query($conn, $sql3);
    }

?>
<?php include('components/header.php') ?>

<div class="bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong
                    class="text-black"></strong></div>
        </div>
    </div>
</div>
<?php
            // Kiểm tra nếu có dữ liệu trả về
            if (mysqli_num_rows($get_product) > 0) {
                // Duyệt qua từng dòng dữ liệu
                while ($row = mysqli_fetch_assoc($get_product)) { ?>
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="<?= $row['image_url'] ?>" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6">

                <h2 class="text-black"><?= $row['name'] ?></h2>
                <p><?= $row['description'] ?></p>
                <p class="mb-4">Ex numquam veritatis debitis minima quo error quam eos dolorum quidem perferendis. Quos
                    repellat dignissimos minus, eveniet nam voluptatibus molestias omnis reiciendis perspiciatis illum
                    hic magni iste, velit aperiam quis.</p>
                <p><strong class="text-primary h4"><?= $row['price'] ?></strong></p>
                <div class="mb-1 d-flex">

                </div>
                <div class="mb-5">
                    <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                        </div>
                        <input type="text" class="form-control text-center" value="1" placeholder=""
                            aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                            <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                        </div>
                    </div>

                </div>
                <p><a href="cart.php" class="buy-now btn btn-sm btn-primary">Add To Cart</a></p>

            </div>
        </div>
    </div>
</div>
<?php }
            } else {
                // Nếu không có dữ liệu
                echo "<tr>
                <td colspan='7'>Không có sản phẩm nào</td>
            </tr>";
            }

            ?>


<div class="site-section block-3 site-blocks-2 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 site-section-heading text-center pt-4">
                <h2>Featured Products</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="nonloop-block-3 owl-carousel">
                    <div class="item">
                        <div class="block-4 text-center">
                            <figure class="block-4-image">
                                <img src="images/cloth_1.jpg" alt="Image placeholder" class="img-fluid">
                            </figure>
                            <div class="block-4-text p-4">
                                <h3><a href="#">Tank Top</a></h3>
                                <p class="mb-0">Finding perfect t-shirt</p>
                                <p class="text-primary font-weight-bold">$50</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="block-4 text-center">
                            <figure class="block-4-image">
                                <img src="images/shoe_1.jpg" alt="Image placeholder" class="img-fluid">
                            </figure>
                            <div class="block-4-text p-4">
                                <h3><a href="#">Corater</a></h3>
                                <p class="mb-0">Finding perfect products</p>
                                <p class="text-primary font-weight-bold">$50</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="block-4 text-center">
                            <figure class="block-4-image">
                                <img src="images/cloth_2.jpg" alt="Image placeholder" class="img-fluid">
                            </figure>
                            <div class="block-4-text p-4">
                                <h3><a href="#">Polo Shirt</a></h3>
                                <p class="mb-0">Finding perfect products</p>
                                <p class="text-primary font-weight-bold">$50</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="block-4 text-center">
                            <figure class="block-4-image">
                                <img src="images/cloth_3.jpg" alt="Image placeholder" class="img-fluid">
                            </figure>
                            <div class="block-4-text p-4">
                                <h3><a href="#">T-Shirt Mockup</a></h3>
                                <p class="mb-0">Finding perfect products</p>
                                <p class="text-primary font-weight-bold">$50</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="block-4 text-center">
                            <figure class="block-4-image">
                                <img src="images/shoe_1.jpg" alt="Image placeholder" class="img-fluid">
                            </figure>
                            <div class="block-4-text p-4">
                                <h3><a href="#">Corater</a></h3>
                                <p class="mb-0">Finding perfect products</p>
                                <p class="text-primary font-weight-bold">$50</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('components/footer.php') ?>