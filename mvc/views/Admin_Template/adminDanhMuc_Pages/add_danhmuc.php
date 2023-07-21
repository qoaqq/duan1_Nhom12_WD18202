<form action="http://localhost/duan1_Nhom12_WD18202/admin/admin_danhmuc/addDM_Feature" method="post">
    <h1>Thêm danh mục</h1>
    <div class="form-group">
    <label for="danhmuc">Tên danh mục</label>
    <input type="text" class="form-control" id="inputdanhmuc" name="tendm" >
    <p style="color: red;" ><?= $data['errors']['tendm'] ?? '' ?></p>
    </div>
    <div class="form-group">
    <label for="idloaihang">ID loại hàng</label>
    <select name="idlh" id="">
            <?php foreach ($data['loaiHang'] as $cate) : ?>
                <option value="<?= $cate['id'] ?>">
                    <?= $cate['ten_loaihang'] ?>
                </option>
            <?php endforeach ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary" name="btn_addDanhmuc">Thêm</button>
</form>
