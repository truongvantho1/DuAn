<?php include('components/header.php') ?>
<?php
$sql = "Select * from categories";
$get_categories = mysqli_query($conn, $sql);
$sql2 = "Select * from products";
$get_products = mysqli_query($conn, $sql2);

?>
<div class="bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong
                    class="text-black">Shop</strong></div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-9 order-2">
                <div class="row">
                    <div class="col -md-12 mb-5">
                        <div class="float-md-left mb-4">
                            <h2 class="text-black h5">Shop All</h2>
                        </div>
                        <div class="d-flex">
                            <div class="dropdown mr-1 ml-md-auto">
                                <p></p>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-secondary btn-sm dropdown-toggle"
                                    id="dropdownMenuReference" data-toggle="dropdown">Giá Cả</button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Giá Từ Thấp Lên Cao</a>
                                    <a class="dropdown-item" href="#">Giá Từ Cao Xuống Thấp</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                        <div class="block-4 text-center border">
                            <figure class="block-4-image">
                                <a href="shop-single.php"><img src="images/Giay.jpg" alt="Image placeholder"
                                        class="img-fluid"></a>
                            </figure>
                            <div class="block-4-text p-4">
                                <h3><a href="shop-single.php">Giày xinh cho người yêu</a></h3>
                                <p class="mb-0">sale 20%</p>
                                <div>
                                    <p style="text-decoration: line-through;">200.000đ</p>
                                    <p class="text-primary font-weight-bold">160.000đ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                        <div class="block-4 text-center border">
                            <figure class="block-4-image">
                                <a href="shop-single.php"><img src="images/giay1.jpg" alt="Image placeholder"
                                        class="img-fluid"></a>
                            </figure>
                            <div class="block-4-text p-4">
                                <h3><a href="shop-single.php">Giày đi trong nhà</a></h3>
                                <p class="mb-0">sale 0%</p>
                                <div>
                                    <p style="text-decoration: line-through;">120.000đ</p>
                                    <p class="text-primary font-weight-bold">120.000đ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                        <div class="block-4 text-center border">
                            <figure class="block-4-image">
                                <a href="shop-single.php"><img src="images/giay2.jpg" alt="Image placeholder"
                                        class="img-fluid"></a>
                            </figure>
                            <div class="block-4-text p-4">
                                <h3><a href="shop-single.php">Giày thể thao unisex</a></h3>
                                <p class="mb-0">sale 10%</p>
                                <div>
                                    <p style="text-decoration: line-through;">190.000đ</p>
                                    <p class="text-primary font-weight-bold">171.000đ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                        <div class="block-4 text-center border">
                            <figure class="block-4-image">
                                <a href="shop-single.php"><img src="images/giay3.jpg" alt="Image placeholder"
                                        class="img-fluid"></a>
                            </figure>
                            <div class="block-4-text p-4">
                                <h3><a href="shop-single.php">Giày Sport</a></h3>
                                <p class="mb-0">sale 0%</p>
                                <div>
                                    <p style="text-decoration: line-through;">120.000đ</p>
                                    <p class="text-primary font-weight-bold">120.000đ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                        <div class="block-4 text-center border">
                            <figure class="block-4-image">
                                <a href="shop-single.php"><img src="images/giay4.jpg" alt="Image placeholder"
                                        class="img-fluid"></a>
                            </figure>
                            <div class="block-4-text p-4">
                                <h3><a href="shop-single.php">giày thể thao siêu rẻ</a></h3>
                                <p class="mb-0">sale 10%</p>
                                <div>
                                    <p style="text-decoration: line-through;">80.000đ</p>
                                    <p class="text-primary font-weight-bold">72.000đ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                        <div class="block-4 text-center border">
                            <figure class="block-4-image">
                                <a href="shop-single.php"><img src="images/giay5.jpg" alt="Image placeholder"
                                        class="img-fluid"></a>
                            </figure>
                            <div class="block-4-text p-4">
                                <h3><a href="shop-single.php">Giày thể thao tháng 11</a></h3>
                                <p class="mb-0">sale 0%</p>
                                <div>
                                    <p style="text-decoration: line-through;">120.000đ</p>
                                    <p class="text-primary font-weight-bold">120.000đ</p>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="">
                        <div style="display: grid;grid-template-columns:1fr 1fr 1fr;grid-gap:16px" class="mb-4"
                            data-aos="fade-up">
                            <?php
                            // Kiểm tra nếu có dữ liệu trả về
                            if (mysqli_num_rows($get_products) > 0) {
                                // Duyệt qua từng dòng dữ liệu
                                while ($row = mysqli_fetch_assoc($get_products)) { ?>
                                    <div class="block-4 text-center border">
                                        <figure class="block-4-image">
                                            <a href="shop-single.php?id=<?= $row['product_id'] ?>"><img
                                                    style="height: 300px;width:100%;object-fit:cover"
                                                    src="<?= $row['image_url'] ?>" alt="Image placeholder"
                                                    class="img-fluid"></a>
                                        </figure>
                                        <div class="block-4-text p-4">
                                            <h3><a href="shop-single.php"></a><?= $row['name'] ?></h3>

                                            <div>
                                                <p class="mb-0">sale 0%</p>
                                                <p style="text-decoration: line-through;"><?= $row['quantity'] ?>đ</p>
                                                <p class="text-primary font-weight-bold"><?= $row['quantity'] ?>đ</p>
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
                        </div>


                    </div>
                    <div class="row" data-aos="fade-up">
                        <div class="col-md-12 text-center">
                            <div class="site-block-27">
                                <ul>
                                    <li><a href="shop5.php">&lt;</a></li>
                                    <li class="active"><span>1</span></li>
                                    <li><a href="shop2.php">2</a></li>
                                    <li><a href="shop3.php">3</a></li>
                                    <li><a href="shop4.php">3</a></li>
                                    <li><a href="shop5.php">3</a></li>
                                    <li><a href="shop2.php">&gt;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 order-1 mb-5 mb-md-0">
                    <div class="border p-4 rounded mb-4">
                        <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-1"><a href="shopg1.php" class="d-flex"><span>Giày</span> <span
                                        class="text-black ml-auto">(9)</span></a>
                            </li>
                            <li class="mb-1"><a href="shopd1.php" class="d-flex"><span>Dép</span> <span
                                        class="text-black ml-auto">(9)</span></a></li>
                            <li class="mb-1"><a href="shoppk1.php" class="d-flex"><span>Phụ kiện</span> <span
                                        class="text-black ml-auto">(8)</span></a></li>

                            <?php
                            // Kiểm tra nếu có dữ liệu trả về
                            if (mysqli_num_rows($get_categories) > 0) {
                                // Duyệt qua từng dòng dữ liệu
                                while ($row = mysqli_fetch_assoc($get_categories)) { ?>
                                    <li class="mb-1"><a href="shopg1.php"
                                            class="d-flex"><span><?= $row['category_name'] ?></span>
                                            <span class="text-black ml-auto"></span></a></li>

                                <?php }
                            } else {
                                // Nếu không có dữ liệu
                                echo "<tr>
                <td colspan='7'>Không có sản phẩm nào</td>
            </tr>";
                            }

                            ?>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="site-section site-blocks-2">
                        <div class="row justify-content-center text-center mb-5">
                            <div class="col-md-7 site-section-heading pt-4">
                                <h2>Categories</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
                                <a class="block-2-item" href="shopg1.php">
                                    <figure class="image">
                                        <img src="images/Giay.jpg" alt="" class="img-fluid">
                                    </figure>
                                    <div class="text">
                                        <span class="text-uppercase">Collections</span>
                                        <h3>Giày</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                                <a class="block-2-item" href="shopd1.php">
                                    <figure class="image">
                                        <img src="images/Dep.jpg" alt="" class="img-fluid">
                                    </figure>
                                    <div class="text">
                                        <span class="text-uppercase">Collections</span>
                                        <h3>Dép</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                                <a class="block-2-item" href="shoppk1.php">
                                    <figure class="image">
                                        <img src="images/Tat.jpg" alt="" class="img-fluid">
                                    </figure>
                                    <div class="text">
                                        <span class="text-uppercase">Collections</span>
                                        <h3>Phụ Kiện</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('components/footer.php') ?>