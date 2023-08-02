<h1 class="text-center">ADMIN BILL</h1>
<section class="text-center">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">CUSTOMER NAME</th>
                <th scope="col">PHONENUMBER</th>
                <th scope="col">ADDRESS</th>
                <th scope="col">TOTAL</th>
                <th scope="col">DATE ADD</th>
                <th scope="col">STATUS</th>
                <th scope="col">Operation</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['bill_list'] as $list) : ?>
                <tr>
                    <th scope="row"><?= $list['id'] ?></th>
                    <td><?= $list['tenkh'] ?></td>
                    <td><?= $list['sdt'] ?></td>
                    <td><?= $list['diachi'] ?></td>
                    <td><?= $list['total'] ?></td>
                    <td><?= $list['ngay_tao'] ?></td>
                    <td><?= $list['status'] ?></td>
                    <td>
                        <a href="http://localhost/duan1_Nhom12_WD18202/admin/admin_Bill/updateStatusBill/<?= $list['id'] ?>">
                            <button type="button" class="btn btn-success">Edit Status</button>
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</section>