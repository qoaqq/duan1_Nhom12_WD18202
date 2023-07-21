  <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-6">
              <div class="card mb-4 mx-4">
                <form action="http://localhost/duan1_Nhom12_WD18202/admin/admin_register/InsertFeature" enctype="multipart/form-data" method="post">
                    <div class="card-body p-4">
                      <h1>Register</h1>
                      <p class="text-medium-emphasis">You Are Have Account?</p>
                      <p class="text-medium-emphasis"><a class="text-decoration-none" href="http://localhost/duan1_Nhom12_WD18202/admin/admin_login">Login</a> Now</p>  
                      
                      <div class="input-group mb-3"><span class="input-group-text">
                          <svg class="icon">
                            <use xlink:href="/duan1_Nhom12_WD18202/public/admin/vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                          </svg></span>
                        <input class="form-control" name="fullname" value="<?= $data['value']['fullname'] ?? '' ?>" type="text" placeholder="Họ và Tên">
                      </div>
                      <p style="color: red;" ><?= $data['errors']['fullname'] ?? '' ?></p>

                      <div class="input-group mb-3"><span class="input-group-text">
                          <svg class="icon">
                            <use xlink:href="/duan1_Nhom12_WD18202/public/admin/vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                          </svg></span>
                        <input class="form-control" name="phonenumber" value="<?= $data['value']['phonenumber'] ?? '' ?>" type="text" placeholder="Số Điện Thoại">
                      </div>
                      <p style="color: red;" ><?= $data['errors']['phonenumber'] ?? '' ?></p>

                      <div class="input-group mb-4"><span class="input-group-text">
                          <svg class="icon">
                            <use xlink:href="/duan1_Nhom12_WD18202/public/admin/vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                          </svg></span>
                        <input class="form-control" name="address" value="<?= $data['value']['address'] ?? '' ?>" type="text" placeholder="Địa Chỉ">
                      </div>
                      <p style="color: red;" ><?= $data['errors']['address'] ?? '' ?></p>
                      
                      <div class="input-group mb-4"><span class="input-group-text">
                          <svg class="icon">
                            <use xlink:href="/duan1_Nhom12_WD18202/public/admin/vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                          </svg></span>
                        <input class="form-control" name="email" value="<?= $data['value']['email'] ?? '' ?>" type="email" placeholder="Email">
                      </div>
                      <p style="color: red;" ><?= $data['errors']['email'] ?? '' ?></p>

                      <div class="input-group mb-4"><span class="input-group-text">
                          <svg class="icon">
                            <use xlink:href="/duan1_Nhom12_WD18202/public/admin/vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                          </svg></span>
                        <input class="form-control" name="password" type="password" placeholder="Password">
                      </div>
                      <p style="color: red;" ><?= $data['errors']['password'] ?? '' ?></p>

                      <div class="input-group mb-4"><span class="input-group-text">
                          <svg class="icon">
                            <use xlink:href="/duan1_Nhom12_WD18202/public/admin/vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                          </svg></span>
                        <input class="form-control" name="img" type="file" placeholder="Ảnh">
                      </div>
                      <p style="color: red;" ><?= $data['errors']['img'] ?? '' ?></p>
                      
                      <div class="input-group mb-4"><span class="input-group-text">
                          <svg class="icon">
                            <use xlink:href="/duan1_Nhom12_WD18202/public/admin/vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                          </svg></span>
                        <input class="form-control" name="special" value="<?= $data['value']['active'] ?? '' ?>" type="number" placeholder="Vai Trò">
                      </div>
                      <p style="color: red;" ><?= $data['errors']['active'] ?? '' ?></p>
                      <button class="btn btn-block btn-success" name="btn_insertUser" type="submit">Create Account</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
  </div>