<h1 class="text-center">CHANGE STATUS</h1>
<form method="post" action="http://localhost/duan1_Nhom12_WD18202/admin/admin_Bill/updateBillFeature">
    <input type="hidden" name="id_bill" value="<?= $data['status_byId']['id'] ?>">
    <label for="exampleInputEmail1" class="form-label">Choose status:</label>
    <select class="form-select" aria-label="Default select example" name="status">
        <?php foreach ($data['status_list'] as $status) : ?>
            <option value="<?= $status['id'] ?>" <?= ($status['id'] == $data['status_byId']['id_status']) ? 'selected' : '' ?>>
                <?= $status['status_name'] ?>
            </option>
        <?php endforeach ?>
    </select>
    <br>
    <button type="submit" name="btn_billUpdate" class="btn btn-primary">Update</button>
</form>