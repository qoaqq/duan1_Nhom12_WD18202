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
            <input type="number" disabled class="form-control" id="inputiddanhmuc" name="idlh" value="<?=  $data['dm']['idlh'] ?? '' ?>">
        </div>
       
        <button type="submit" class="btn btn-primary" name="btn_editDanhmuc">Sửa</button>
    </form>
