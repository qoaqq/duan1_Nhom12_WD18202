  <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-6">
              <div class="card mb-4 mx-4">
                <form action="http://localhost/live/admin/admin_register/InsertFeature" enctype="multipart/form-data" method="post">
                    <div class="card-body p-4">
                      <h1>Register</h1>
                      <p class="text-medium-emphasis">Create your account</p>
                      
                      <div class="input-group mb-3"><span class="input-group-text">
                          <svg class="icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                          </svg></span>
                        <input class="form-control" name="fullname" type="text" placeholder="Họ và Tên">
                      </div>

                      <div class="input-group mb-3"><span class="input-group-text">
                          <svg class="icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                          </svg></span>
                        <input class="form-control" name="phonenumber" type="text" placeholder="Số Điện Thoại">
                      </div>

                      <div class="input-group mb-4"><span class="input-group-text">
                          <svg class="icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                          </svg></span>
                        <input class="form-control" name="address" type="text" placeholder="Địa Chỉ">
                      </div>
                      
                      <div class="input-group mb-4"><span class="input-group-text">
                          <svg class="icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                          </svg></span>
                        <input class="form-control" name="email" type="email" placeholder="Email">
                      </div>

                      <div class="input-group mb-4"><span class="input-group-text">
                          <svg class="icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                          </svg></span>
                        <input class="form-control" name="password" type="password" placeholder="Password">
                      </div>

                      <div class="input-group mb-4"><span class="input-group-text">
                          <svg class="icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                          </svg></span>
                        <input class="form-control" name="img" type="file" placeholder="Ảnh">
                        
                      </div>
                      <p style="color: red;" ><?= $data['errors']['img'] ?? '' ?></p>
                      

                      <div class="input-group mb-4"><span class="input-group-text">
                          <svg class="icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                          </svg></span>
                        <input class="form-control" name="special" type="number" placeholder="Vai Trò">
                      </div>
                      <button class="btn btn-block btn-success" name="btn_insertUser" type="submit">Create Account</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
  </div>