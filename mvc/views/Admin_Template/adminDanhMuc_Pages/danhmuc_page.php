<form action="http://localhost/duan1_Nhom12_WD18202/admin/admin_danhmuc/delDM_byCheckBox" method="post">
    <h1 class="text-center">ADMIN CATEGORIES</h1>
    <br>
    <a class="btn btn-success" href="http://localhost/duan1_Nhom12_WD18202/admin/admin_danhmuc/addDM_Theme/">Add Categories</a>
    <button id="checkAllBtn" onclick="checkAll()" class="btn btn-success" type="button">Select All</button>
    <button id="uncheckAllBtn" onclick="uncheckAll()" class="btn btn-danger" type="button">Unselect All</button>
    <a href="http://localhost/duan1_Nhom12_WD18202/admin/admin_danhmuc/delDM_byCheckBox">
        <button id="deleteAllBtn" class="btn btn-warning" name="btn_delByCheckBox" onclick="return confirm('Do you want to delete?')">
            Delete By Checkbox
        </button></a>
    <table class="table">
        <table class="table">
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th>ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">ID Sectors</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <?php
            foreach ($data['listdm'] as $row) { ?>
                <tr>
                    <tbody>
                        <tr>
                            <td></td>
                            <td><input type="checkbox" name="ids[]" value="<?= $row['id'] ?>"></td>
                            <td><?= $row['id'] ?></td>
                            <td><?= $row['ten_danhmuc'] ?></td>
                            <td><?= $row['id_gioitinhLoaihang'] ?></td>
                            <td>
                                <a class="btn btn-success" href="http://localhost/duan1_Nhom12_WD18202/admin/admin_danhmuc/editDM_Feature/<?= $row['id'] ?>">Edit</a>
                                <a class="btn btn-danger" href="http://localhost/duan1_Nhom12_WD18202/admin/admin_danhmuc/delDM_byId/&id=<?= $row['id'] ?>" onclick="return confirm('Do you want to delete?')">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        </tbody>
    </table>

</form>
<script>
    function uncheckAll() {
        var checkboxes = document.getElementsByName('ids[]');
        for (var i = 0; i < checkboxes.length; i++) {
            checkboxes[i].checked = false;
        }
    }

    function checkAll() {
        var checkboxes = document.getElementsByName('ids[]');
        for (var i = 0; i < checkboxes.length; i++) {
            checkboxes[i].checked = true;
        }
    }
</script>