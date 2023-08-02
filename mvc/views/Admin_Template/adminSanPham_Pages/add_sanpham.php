<form action="http://localhost/duan1_Nhom12_WD18202/admin/admin_sanpham/addSP_Feature" method="post" enctype="multipart/form-data">
        <h1>ADD PRODUCTS</h1>
        <br>
        <div class="form-group">
            <label for="tensanpham">Name Product:</label>
            <input type="text" class="form-control" id="inputiddanhmuc" name="tensp">
            <p style="color: red;" ><?= $data['errors']['tensp'] ?? '' ?></p>
        </div>
        <div class="form-group">
            <label for="gia">Price:</label>
            <input type="number" class="form-control" id="inputdanhmuc" aria-describedby="emailHelp" name="gia">
            <p style="color: red;" ><?= $data['errors']['gia'] ?? '' ?></p>
        </div>
        <div class="form-group">
            <label for="img">Image:</label>
            <input type="file" class="form-control" id="inputdanhmuc" aria-describedby="emailHelp" name="anh">
            <p style="color: red;" ><?= $data['errors']['anh'] ?? '' ?></p>
        </div>
        <div class="form-group">
            <label for="mota">Description:</label>
            <input type="text" class="form-control" id="inputdanhmuc" aria-describedby="emailHelp" name="mota">
            <p style="color: red;" ><?= $data['errors']['mota'] ?? '' ?></p>
        </div>
        <div class="form-group">
            <label for="soluong">Quantity:</label>
            <input type="number" class="form-control" id="inputdanhmuc" aria-describedby="emailHelp" name="soluong">
            <p style="color: red;" ><?= $data['errors']['soluong'] ?? '' ?></p>
        </div>
        <div class="form-group">
            <label for="idloaihang">ID Sectors:</label>
            <select class="form-select" name="idlh" id="idloaihang">
                <?php foreach ($data['loaiHang'] as $sp) : ?>
                    <option value="<?= $sp['id'] ?>">
                        <?= $sp['ten_loaihang'] ?>
                    </option>
                <?php endforeach ?>
            </select>
        </div>
        <br>
        <button type="submit" class="btn btn-primary" name="btn_addSanpham">Add</button>
    </form>
