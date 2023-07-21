<form action="http://localhost/duan1_Nhom12_WD18202/admin/admin_danhmuc/delDM_byCheckBox" method="post">
<h1 class="text-center">QUẢN LÝ DANH MỤC</h1>
<a class="btn btn-dark" href="http://localhost/duan1_Nhom12_WD18202/admin/admin_danhmuc/addDM_Theme/">Thêm danh mục</a>
<a href="http://localhost/duan1_Nhom12_WD18202/admin/admin_danhmuc/delDM_byCheckBox"><button id="deleteAllBtn" class="btn btn-secondary" name="btn_delByCheckBox" onclick="return confirm('Bạn có chắc chắn muốn xóa dữ liệu?')">Xóa Theo Mục Đã Chọn</button></a>
<button id="uncheckAllBtn" onclick="uncheckAll()" class="btn btn-info" type="button">Bỏ chọn tất cả</button>
<button id="checkAllBtn" onclick="checkAll()" class="btn btn-info" type="button">Chọn tất cả</button>
    <table class="table">
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>ID</th>
                        <th scope="col">Tên danh mục</th>
                        <th scope="col">ID loại hàng</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                </thead>
                <?php
                foreach ($data['listdm'] as $row) { ?>
                    <tr>
                        <tbody>
                            <tr>
                                <td></td>
                                <td><input type="checkbox" name="ids[]" value="<?= $row['id'] ?>"></td>
                                <td><?= $row['id'] ?></td>
                                <td><?= $row['ten_danhmuc'] ?></td>
                                <td><?= $row['id_loaihang'] ?></td>
                                <td>
                                    <a class="btn btn-success" href="http://localhost/duan1_Nhom12_WD18202/admin/admin_danhmuc/editDM_Feature/<?= $row['id'] ?>">Sửa</a>
                                    <a class="btn btn-danger" href="http://localhost/duan1_Nhom12_WD18202/admin/admin_danhmuc/delDM_byId/&id=<?= $row['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa dữ liệu?')">Xóa</a>
                                </td>
                            </tr>
                        </tbody>
                    </tr>
                <?php } ?>
        </tbody>
    </table>
    </tbody>
    </table>
 
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