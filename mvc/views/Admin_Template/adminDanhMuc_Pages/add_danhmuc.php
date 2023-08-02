<form action="http://localhost/duan1_Nhom12_WD18202/admin/admin_danhmuc/addDM_Feature" method="post">
    <h1>ADD CATEGORIES</h1>
    <br>
    <div class="form-group">
        <label for="danhmuc">Name Categories:</label>
        <input type="text" class="form-control" id="inputdanhmuc" name="tendm">
        <br>
        <p style="color: red;"><?= $data['errors']['tendm'] ?? '' ?></p>
    </div>
    <div class="form-group">
        <label for="idloaihang">ID Sector:</label>
        <select class="form-select" name="idlh" id="">
            <?php foreach ($data['gioitinh_loaiHang'] as $cate) : ?>
                <option value="<?= $cate['id'] ?>">
                    <?= $cate['id'] ?>
                </option>
            <?php endforeach ?>
        </select>
    </div>
    <br>
    <button type="submit" class="btn btn-primary" name="btn_addDanhmuc">Add</button>
</form>