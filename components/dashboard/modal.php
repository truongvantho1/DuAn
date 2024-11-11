<!-- Modal -->
<form action="" method="post" enctype="multipart/form-data">
    <div class="modal fade" id="add-product" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Sản phẩm</label>
                        <input required type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="desc" class="form-label">Mô tả</label>
                        <input required type="text" class="form-control" name="desc" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Giá</label>
                        <input required type="text" class="form-control" name="price" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Số lượng</label>
                        <input required type="text" class="form-control" name="quantity" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for=image"" class="form-label">Hình ảnh</label>
                        <input required type="file" class="form-control" name="image" placeholder="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-bs-dismiss="modal">Đóng</button>
                    <button class="btn btn-info" type="submit" name="add-product">Thêm sản phẩm</button>
                </div>
            </div>
        </div>
    </div>
</form>