<form method="post" enctype="multipart/form-data" action="http://localhost/live/admin/admin_profile/updateAdminProfile/<?= $data['users']['id'] ?>" class="container">
  <div class="form-group">
    <label for="formGroupExampleInput">Tên tài khoản:</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="fullname" value="<?= $data['users']['tenkh'] ?? '' ?>"  placeholder="Example input">
  </div>
    </br>
  <div class="form-group">
    <label for="formGroupExampleInput2">Số điện thoại:</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="phonenumber" value="<?= $data['users']['sdt'] ?? '' ?>"  placeholder="Another input">
  </div>
    </br>
  <div class="form-group">
    <label for="formGroupExampleInput2">Địa chỉ:</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="address" value="<?= $data['users']['diachi'] ?? '' ?>"  placeholder="Another input">
  </div>
    </br>
  <div class="form-group">
    <label for="formGroupExampleInput2">Email:</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="email" value="<?= $data['users']['email'] ?? '' ?>"  placeholder="Another input">
  </div>
    </br>
    <div class="form-group">
    <label for="formGroupExampleInput2">Password:</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="password" value="<?= $data['users']['password'] ?? '' ?>"  placeholder="Another input">
  </div>
    </br>
  <div class="form-group">
    <label for="formGroupExampleInput2">Ảnh</label>
    <input type="hidden" name="img" value="<?= $data['users']['anh'] ?>">
    <img src="/live/public/img/<?= $data['users']['anh'] ?>" width="200p" height="200" id="formGroupExampleInput2" alt="">
    <input type="file" name="img">
  </div>
    </br>
  <div class="form-group">
    <label for="formGroupExampleInput2">Role:</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="role" value="<?= $data['users']['vaitro'] ?? '' ?>" disabled  placeholder="Another input">
  </div>
  </br>
  <button type="submit" name="btn_updateAdminProfile" class="btn btn-primary">Update</button>
</form>

