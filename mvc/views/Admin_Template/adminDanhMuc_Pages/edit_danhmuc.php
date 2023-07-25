    <form action="http://localhost/duan1_Nhom12_WD18202/admin/admin_danhmuc/editDM_Theme/<?= $data['id']?>" method="post">
        <h1>Sửa danh mục</h1>
        <input type="hidden" value="<?= $data['id']?>" name="id">
        <div class="form-group">
            <label for="danhmuc">Tên danh mục</label>
            <input type="text" class="form-control" id="inputdanhmuc" aria-describedby="emailHelp" name="tendm" value="<?= $data['dm']['ten_danhmuc'] ?? '' ?>">
        </div>
        <p style="color: red;"><?= $data['errors']['tendm'] ?? '' ?></p>
        <div class="form-group">
            <label for="idloaihang">ID loại hàng</label>
            <select name="idlh">
                <?php foreach ($data['gioitinh_loaiHang'] as $cate) : ?>
                    <option value="<?= $cate['id'] ?>" <?= ($cate['id'] == $data['dm']['id_gioitinhLoaihang']) ? 'selected' : '' ?>>
                        <?= $cate['id'] ?>
                    </option>
                <?php endforeach ?>
            </select>
        </div>
       
        <button type="submit" class="btn btn-primary" name="btn_editDanhmuc">Sửa</button>
    </form>
