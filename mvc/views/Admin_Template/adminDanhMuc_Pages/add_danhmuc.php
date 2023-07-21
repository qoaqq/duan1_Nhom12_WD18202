<form action="http://localhost/duan1_Nhom12_WD18202/admin/admin_danhmuc/addDM_Feature" method="post">
    <h1>Thêm danh mục</h1>
    <div class="form-group">
    <label for="danhmuc">Tên danh mục</label>
    <input type="text" class="form-control" id="inputdanhmuc" name="tendm" >
    <p style="color: red;" ><?= $data['errors']['tendm'] ?? '' ?></p>
    </div>
    <div class="form-group">
    <label for="idloaihang">ID loại hàng</label>
    <input type="text" disabled class="form-control" id="inputiddanhmuc" name="idlh">
    </div>
    <button type="submit" class="btn btn-primary" name="btn_addDanhmuc">Thêm</button>
</form>
