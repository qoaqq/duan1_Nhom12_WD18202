<form method="post" enctype="multipart/form-data" action="http://localhost/duan1_Nhom12_WD18202/admin/admin_profile/updateAdminProfile/<?= $data['users']['id'] ?>" class="container">
  <div class="form-group">
    <label for="formGroupExampleInput">Name:</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="fullname" value="<?= $data['users']['tenkh'] ?? '' ?>">
  </div>
  <p style="color: red;"><?= $data['errors']['fullname'] ?? '' ?></p>
  <div class="form-group">
    <label for="formGroupExampleInput2">Phonenumber:</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="phonenumber" value="<?= $data['users']['sdt'] ?? '' ?>">
  </div>
  <p style="color: red;"><?= $data['errors']['phonenumber'] ?? '' ?></p>
  <div class="form-group">
    <label for="formGroupExampleInput2">Address:</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="address" value="<?= $data['users']['diachi'] ?? '' ?>">
  </div>
  <p style="color: red;"><?= $data['errors']['address'] ?? '' ?></p>
  <div class="form-group">
    <label for="formGroupExampleInput2">Email:</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="email" value="<?= $data['users']['email'] ?? '' ?>">
  </div>
  <p style="color: red;"><?= $data['errors']['email'] ?? '' ?></p>
  <div class="form-group">
    <label for="formGroupExampleInput2">Image</label>
    <input type="hidden" name="img" value="<?= $data['users']['anh'] ?>">
    <img src="/duan1_Nhom12_WD18202/public/img/<?= $data['users']['anh'] ?>" width="200p" height="200" id="formGroupExampleInput2" alt="">
    <input type="file" name="img">
    <p style="color: red;"><?= $data['errors']['img'] ?? '' ?></p>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Role:</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="role" value="<?= $data['users']['vaitro'] ?? '' ?>" disabled>
  </div>
  <br>
  <button type="submit" name="btn_updateAdminProfile" class="btn btn-primary">Update</button>
</form>