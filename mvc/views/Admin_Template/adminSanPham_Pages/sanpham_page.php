<form action="http://localhost/duan1_Nhom12_WD18202/admin/admin_sanpham/Theme" method="get">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <button class="btn btn-outline-danger" type="button" onclick="window.location.href='/duan1_Nhom12_WD18202/admin/admin_sanpham/Theme'">All Products</button>
            <button class="btn btn-outline-danger" type="submit">Search</button>
        </div>
        <input type="text" class="form-control" value="<?php if (isset($_GET['search'])) {
                                                            echo $_GET['search'];
                                                        } ?>" name="search" style="flex: none; width: 300px; margin-left: 5px;" placeholder="" aria-label="" aria-describedby="basic-addon1">
    </div>
</form>
<h1 class="text-center" style="margin-bottom: 20px;">ADMIN PRODUCTS</h1>
<?php
    if(isset($_GET['msg_editSanpham'])){
        echo "<h3 style='color: red' class='text-center'>".$_GET['msg_editSanpham']."</h3>";
    }
?>

<?php
    if(isset($_GET['msg_addSanpham'])){
        echo "<h3 style='color: red' class='text-center'>".$_GET['msg_addSanpham']."</h3>";
    }
?>
<form action="http://localhost/duan1_Nhom12_WD18202/admin/admin_sanpham/delSP_byCheckBox" method="post">
    <div class="row">
        <div class="col-md-6">

        </div>
        <div class="col-md-6">
            <a class="btn btn-success" href="http://localhost/duan1_Nhom12_WD18202/admin/admin_sanpham/addSP_Theme/">Add Product</a>
            <button id="checkAllBtn" onclick="checkAll()" class="btn btn-success" type="button">Select All</button>
            <button id="uncheckAllBtn" onclick="uncheckAll()" class="btn btn-danger" type="button">Unselect All</button>
            <a href="http://localhost/duan1_Nhom12_WD18202/admin/admin_sanpham/delSP_byCheckBox">
                <button id="deleteAllBtn" class="btn btn-warning" name="btn_delByCheckBox" onclick="return confirm('Do you want to delete?')">
                    Delete By Checkbox
                </button>
            </a>
        </div>
    </div>
    <table class="table">
        <table class="table">
            <thead>
                <tr class="text-center">
                    <th></th>
                    <th scope="col">ID Products</th>
                    <th scope="col">Name Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">ID Sectors</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <?php foreach ($data['result'] as $row) { ?>
                <tr>
                    <tbody>
                        <tr class="text-center">
                            <td><input type="checkbox" name="ids[]" value="<?= $row['id'] ?>"></td>
                            <td><?= $row['id'] ?></td>
                            <td><?= $row['ten_sanpham'] ?></td>
                            <td><?= $row['gia'] ?>$</td>
                            <td><img src="/duan1_Nhom12_WD18202/public/img/<?= $row['anh'] ?>" width="120"></td>
                            <td><?= $row['mota'] ?></td>
                            <td><?= $row['soluong'] ?></td>
                            <td><?= $row['id_loaihang'] ?></td>
                            <td>
                                <a class="btn btn-success" href="http://localhost/duan1_Nhom12_WD18202/admin/admin_sanpham/editSP_Theme/<?= $row['id'] ?>">Edit</a>
                                <a class="btn btn-danger" href="http://localhost/duan1_Nhom12_WD18202/admin/admin_sanpham/delSP_byId/<?= $row['id'] ?>" onclick="return confirm('Do you want to delete?')">Delete</a>
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
<div class="text-center">
    <?php
    $searchQuery = isset($_GET['search']) ? "&search=" . urlencode($_GET['search']) : "";

    if ($data['pagiNation']['current_page'] >= 1 && $data['pagiNation']['total_page'] > 1) {
        echo '<a class="text-decoration-none btn btn-outline-primary" href="http://localhost/duan1_Nhom12_WD18202/admin/admin_sanpham/Theme?page=' . ($data['pagiNation']['current_page'] - 1) . $searchQuery . '">Prev</a> | ';
    }

    for ($i = 1; $i <= $data['pagiNation']['total_page']; $i++) {
        if ($i == $data['pagiNation']['current_page']) {
            echo '<span>' . $i . '</span> | ';
        } else {
            echo '<a class="text-decoration-none btn btn-outline-primary" href="http://localhost/duan1_Nhom12_WD18202/admin/admin_sanpham/Theme?page=' . $i . $searchQuery . '">' . $i . '</a> | ';
        }
    }

    if ($data['pagiNation']['current_page'] <= $data['pagiNation']['total_page'] && $data['pagiNation']['total_page'] > 1) {
        echo '<a class="text-decoration-none btn btn-outline-primary" href="http://localhost/duan1_Nhom12_WD18202/admin/admin_sanpham/Theme?page=' . ($data['pagiNation']['current_page'] + 1) . $searchQuery . '">Next</a> | ';
    }
    ?>
</div>

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