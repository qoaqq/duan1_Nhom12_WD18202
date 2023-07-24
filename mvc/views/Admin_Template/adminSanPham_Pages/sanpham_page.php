<form action="http://localhost/duan1_Nhom12_WD18202/admin/admin_sanpham/delSP_byCheckBox" enctype="multipart/form-data" method="post">
    <h1 class="text-center">QUẢN LÝ SẢN PHẨM</h1>
    <a class="btn btn-dark" href="http://localhost/duan1_Nhom12_WD18202/admin/admin_sanpham/addSP_Theme/">Thêm sản phẩm</a>
    <a href="http://localhost/duan1_Nhom12_WD18202/admin/admin_sanpham/delSP_byCheckBox"><button id="deleteAllBtn" class="btn btn-secondary" name="btn_delByCheckBox" onclick="return confirm('Bạn có chắc chắn muốn xóa dữ liệu?')">Xóa Theo Mục Đã Chọn</button></a>
    <button id="uncheckAllBtn" onclick="uncheckAll()" class="btn btn-info" type="button">Bỏ chọn tất cả</button>
    <button id="checkAllBtn" onclick="checkAll()" class="btn btn-info" type="button">Chọn tất cả</button>
    <table class="table">
        <table class="table">
            <thead>
                <tr class="text-center">
                    <th></th>
                    <th scope="col">ID sản phẩm</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Mô tả</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">ID loại hàng</th>
                    <th scope="col">Thao tác</th>
                </tr>
            </thead>
            <?php foreach ($data['result'] as $row) { ?>
                <tr>
                    <tbody>
                        <tr class="text-center">
                            <td><input type="checkbox" name="ids[]" value="<?= $row['id'] ?>"></td>
                            <td><?= $row['id'] ?></td>
                            <td><?= $row['ten_sanpham'] ?></td>
                            <td><?= $row['gia'] ?>$</td>
                            <td><img src="/duan1_Nhom12_WD18202/public/img/<?= $row['anh'] ?>" width="120"></td>
                            <td><?= $row['mota'] ?></td>
                            <td><?= $row['soluong'] ?></td>
                            <td><?= $row['id_loaihang'] ?></td>
                            <td>
                                <a class="btn btn-success" href="http://localhost/duan1_Nhom12_WD18202/admin/admin_sanpham/editSP_Theme/<?= $row['id'] ?>">Sửa</a>
                                <a class="btn btn-danger" href="http://localhost/duan1_Nhom12_WD18202/admin/admin_sanpham/delSP_byId/<?= $row['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa dữ liệu?')">Xóa</a>
                            </td>
                        </tr>
                    </tbody>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        </tbody>
    </table>
    <div class="text-center" >
        <?php
            if ($data['pagiNation']['current_page'] >= 1 && $data['pagiNation']['total_page'] > 1) {
                echo '<a class="text-decoration-none btn btn-outline-primary" href="http://localhost/duan1_Nhom12_WD18202/admin/admin_sanpham/Theme&page=' . ($data['pagiNation']['current_page'] - 1) . '">Prev</a> | ';
            }

            for ($i = 1; $i <= $data['pagiNation']['total_page']; $i++) {
                if ($i == $data['pagiNation']['current_page']) {
                    echo '<span>' . $i . '</span> | ';
                } else {
                    echo '<a class="text-decoration-none btn btn-outline-primary" href="http://localhost/duan1_Nhom12_WD18202/admin/admin_sanpham/Theme&page=' . $i . '">' . $i . '</a> | ';
                }
            }

            if ($data['pagiNation']['current_page'] <= $data['pagiNation']['total_page'] && $data['pagiNation']['total_page'] > 1) {
                echo '<a class="text-decoration-none btn btn-outline-primary" href="http://localhost/duan1_Nhom12_WD18202/admin/admin_sanpham/Theme&page=' . ($data['pagiNation']['current_page'] + 1) . '">Next</a> | ';
            }
        ?>
    </div>
</form>
<script>
    function uncheckAll() {
        var checkboxes = document.getElementsByName('ids[]');
        for (var i = 0; i < checkboxes.length; i++) {
            checkboxes[i].checked = false;
        }
    }

    function checkAll() {
        var checkboxes = document.getElementsByName('ids[]');
        for (var i = 0; i < checkboxes.length; i++) {
            checkboxes[i].checked = true;
        }
    }
</script>