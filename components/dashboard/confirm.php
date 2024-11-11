<div class="modal fade" id="confirm-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
                Nhấn OK để xác nhận sửa thông tin sản phẩm
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Đóng</button>
                <button data-bs-toggle="modal" data-bs-target="#edit-product"
                    onclick="openEditModal(<?= $product_id ?>)" class="btn btn-info">OK</button>
            </div>

        </div>
    </div>
</div>
<script>
    function openEditModal(productId) {
        $('#confirm-modal').modal('hide');

        // Thiết lập giá trị `product_id` ẩn để truyền vào form
        document.querySelector("input[name='product_id']").value = productId;
    }
</script>