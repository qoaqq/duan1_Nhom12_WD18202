<h1 class="text-center">CHOOSE THE STATUS</h1>
<br>
<section class="container">
    <form method="post" action="http://localhost/duan1_Nhom12_WD18202/admin/admin_Bill/updateBillFeature/<?= $data['status_list']['id'] ?>">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"><h3>Current Status:</h3></label>
            <input type="text" value="<?= $data['status_list']['status'] ?>" disabled class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <br>
        <label for="exampleInputEmail1" class="form-label">Choose status:</label>
        <select class="form-select" aria-label="Default select example" name="status">
            <option value="Chưa trung chuyển">Chưa trung chuyển</option>
            <option value="Đã trung chuyển">Đã trung chuyển</option>
        </select>
        <br>
        <button type="submit" name="btn_billUpdate" class="btn btn-primary">Submit</button>
    </form>
</section>