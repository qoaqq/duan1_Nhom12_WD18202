<form action="http://localhost/live/admin/admin_users/deleteFeatureByCheckBox" method="post">
<button type="button" id="select-all" class="btn btn-success">Chọn tất cả</button>
<button type="button" id="deselect-all" class="btn btn-danger">Bỏ chọn tất cả</button>
<button type="submit" class="btn btn-warning">Xóa theo mục đã chọn</button>

    <table class="table text-center">
        <tr>
            <th></th>
            <th>id</th>
            <th>Tên tài khoản</th>
            <th>Số điện thoại</th>
            <th>Địa chỉ</th>
            <th>Email</th>
            <th>Ảnh</th>
            <th>Role</th>
        </tr>

        <?php foreach ($data['table'] as $user) { ?>
            <tr>
                <td><input type="checkbox" name="ids[]" value="<?= $user['id'] ?>" ></td>
                <td><?= $user['id'] ?></td>
                <td><?= $user['tenkh'] ?></td>
                <td><?= $user['sdt'] ?></td>
                <td><?= $user['diachi'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><img src="/live/public/img/<?= $user['anh'] ?>" alt="Avatar" width="50"></td>
                <td><?= $user['vaitro'] ?></td>
                <td>
                <a href="http://localhost/live/admin/admin_users/getIdUserUpdate/<?= $user['id'] ?>" type="button" class="btn btn-success">Edit</a>
                <a href="http://localhost/live/admin/admin_users/deleteFeatureById/<?= $user['id'] ?>" onclick="return confirm('Bạn có muốn xóa không?')" type="button" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</form>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const selectAllBtn = document.getElementById('select-all');
    const deselectAllBtn = document.getElementById('deselect-all');

    selectAllBtn.addEventListener('click', function() {
        selectAllCheckboxes(true);
    });

    deselectAllBtn.addEventListener('click', function() {
        selectAllCheckboxes(false);
    });
    });

    function selectAllCheckboxes(checked) {
    const checkboxes = document.querySelectorAll('input[name="ids[]"]');
    checkboxes.forEach(function(checkbox) {
        checkbox.checked = checked;
    });
    }
</script>
