<form action="http://localhost/duan1_Nhom12_WD18202/admin/admin_users/deleteFeatureByCheckBox" method="post">
    <h1 class="text-center">ADMIN CUSTOMER ACCOUNT</h1>
    <br>
    <a href="http://localhost/duan1_Nhom12_WD18202/admin/admin_users/insertTheme"><button type="button" id="deselect-all" class="btn btn-success">Add customer account</button></a>
    <button type="button" id="select-all" class="btn btn-success">Select All</button>
    <button type="button" id="deselect-all-btn" class="btn btn-danger">Unselect All</button>
    <button type="submit" onclick="return confirm('Do you want to delete?')" class="btn btn-warning">Delete By Checkbox</button>

    <table class="table text-center">
        <tr>
            <th></th>
            <th>id</th>
            <th>Name</th>
            <th>Phonenumber</th>
            <th>Address</th>
            <th>Email</th>
            <th>Image</th>
            <th>Role</th>
            <th>Operation</th>
        </tr>

        <?php foreach ($data['table'] as $user) { ?>
            <tr>
                <td><input type="checkbox" name="ids[]" value="<?= $user['id'] ?>"></td>
                <td><?= $user['id'] ?></td>
                <td><?= $user['tenkh'] ?></td>
                <td><?= $user['sdt'] ?></td>
                <td><?= $user['diachi'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><img src="/duan1_Nhom12_WD18202/public/img/<?= $user['anh'] ?>" alt="Avatar" width="50"></td>
                <td><?= $user['vaitro'] ?></td>
                <td>
                    <a href="http://localhost/duan1_Nhom12_WD18202/admin/admin_users/getIdUserUpdate/<?= $user['id'] ?>" type="button" class="btn btn-success">Edit</a>
                    <a href="http://localhost/duan1_Nhom12_WD18202/admin/admin_users/deleteFeatureById/<?= $user['id'] ?>" onclick="return confirm('Do you want to delete?')" type="button" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</form>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const selectAllBtn = document.getElementById('select-all');
        const deselectAllBtn = document.getElementById('deselect-all-btn');

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