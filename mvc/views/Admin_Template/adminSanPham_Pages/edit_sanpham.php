<form action="http://localhost/duan1_Nhom12_WD18202/admin/admin_sanpham/editSP_Feature/<?= $data['id'] ?>" method="post" enctype="multipart/form-data">
    <h1>EDIT PRODUCTS</h1>
    <br>
    <input type="hidden" value="<?= $data['id'] ?>" name="id">
    <div class="form-group">
        <label for="tensp">Name Product:</label>
        <input type="text" class="form-control" id="tensp" aria-describedby="emailHelp" name="tensp" value="<?= $data['sp']['ten_sanpham'] ?? '' ?>">
        <p style="color: red;" ><?= $data['errors']['tensp'] ?? '' ?></p>
    </div>

    <div class="form-group">
        <label for="gia">Price:</label>
        <input type="text" class="form-control" id="gia" aria-describedby="emailHelp" name="gia" value="<?= $data['sp']['gia'] ?? '' ?>">
        <p style="color: red;" ><?= $data['errors']['gia'] ?? '' ?></p>
    </div>

    <div class="form-group">
        <label for="imgInp">Old Image:</label><br>
        <img src="/duan1_Nhom12_WD18202/public/img/<?= $data['sp']['anh'] ?>" width="150px" id="formGroupExampleInput2" alt="">
        <input type="hidden" value="<?= $data['sp']['anh'] ?>" name="anh">
        <input type="file" name="anh">
        <p style="color: red;" ><?= $data['errors']['anh'] ?? '' ?></p>
    </div>

    <div class="form-group">
        <label for="mota">Description:</label>
        <input type="text" class="form-control" id="mota" aria-describedby="emailHelp" name="mota" value="<?= $data['sp']['mota'] ?? '' ?>">
        <p style="color: red;" ><?= $data['errors']['mota'] ?? '' ?></p>
    </div>

    <div class="form-group">
        <label for="soluong">Quantity:</label>
        <input type="text" class="form-control" id="soluong" aria-describedby="emailHelp" name="soluong" value="<?= $data['sp']['soluong'] ?? '' ?>">
        <p style="color: red;" ><?= $data['errors']['soluong'] ?? '' ?></p>
    </div>

    <div class="form-group">
        <label for="idlh">ID Sectors:</label>
        <select class="form-select" name="idlh">
                <?php foreach ($data['loaiHang'] as $sp) : ?>
                    <option value="<?= $sp['id'] ?>" <?= ($sp['id'] == $data['sp']['id_loaihang']) ? 'selected' : '' ?>>
                        <?= $sp['ten_loaihang'] ?>
                    </option>
                <?php endforeach ?>
        </select>
    </div>
    <br>
    <button type="submit" class="btn btn-primary" name="btn_editSanpham">Edit</button>
</form>
<script>

</script>