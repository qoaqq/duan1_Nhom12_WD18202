<form method="post" enctype="multipart/form-data" action="http://localhost/duan1_Nhom12_WD18202/admin/admin_users/updateFeature/<?= $data['update']['id'] ?>" class="container">
  <div class="form-group">
    <input type="hidden" class="form-control" id="exampleInputEmail1" name="fullname" value="<?= $data['update']['id'] ?>">
  </div>
  </br>
  <div class="form-group">
    <label for="exampleInputEmail1">Tên khách hàng</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="fullname" value="<?= $data['update']['tenkh'] ?>">
  </div>
  <p style="color: red;"><?= $data['errors']['fullname'] ?? '' ?></p>
  </br>
  <div class="form-group">
    <label for="exampleInputPassword1">Số điện thoại</label>
    <input type="number" class="form-control" id="exampleInputPassword1" name="phonenumber" value="<?= $data['update']['sdt'] ?>">
  </div>
  <p style="color: red;"><?= $data['errors']['phonenumber'] ?? '' ?></p>
  </br>
  <div class="form-group">
    <label for="exampleInputPassword1">Địa chỉ</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="address" value="<?= $data['update']['diachi'] ?>">
  </div>
  <p style="color: red;"><?= $data['errors']['address'] ?? '' ?></p>
  </br>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" class="form-control" id="exampleInputPassword1" name="email" value="<?= $data['update']['email'] ?>">
  </div>
  <p style="color: red;"><?= $data['errors']['email'] ?? '' ?></p>
  </br>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="password" value="<?= $data['update']['password'] ?>">
  </div>
  <p style="color: red;"><?= $data['errors']['password'] ?? '' ?></p>
  </br>
  <div class="form-group">
    <label for="exampleInputPassword1">Ảnh</label>
    <input type="hidden" name="img" value="<?= $data['update']['anh'] ?>">
    <img src="/duan1_Nhom12_WD18202/public/img/<?= $data['update']['anh'] ?>" width="200" height="200" alt="">
    <input type="file" name="img">
  </div>
  <p style="color: red;"><?= $data['errors']['img'] ?? '' ?></p>
  </br>
  <div class="form-group">
    <label for="exampleInputPassword1">Role</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="role" disabled value="<?= $data['update']['vaitro'] ?>">
  </div>
  </br>
  <button type="submit" name="btn_updateUser" class="btn btn-primary">Update</button>
</form>