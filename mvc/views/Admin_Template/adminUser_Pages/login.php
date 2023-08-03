<form action="http://localhost/duan1_Nhom12_WD18202/admin/admin_login/loginFeature" method="post">
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card-group d-block d-md-flex row">
                <div class="card col-md-7 p-4 mb-0">
                    <div class="card-body">
                    <h1>Login</h1>
                    <p class="text-medium-emphasis">Back <a class="text-decoration-none" href="http://localhost/duan1_Nhom12_WD18202/khachhang">Home</a></p>
                    
                    <p style="color: red;" ><?= $data['errors']['user'] ?? '' ?></p>
                    <div class="input-group mb-3"><span class="input-group-text">
                        <svg class="icon">
                            <use xlink:href="/duan1_Nhom12_WD18202/public/admin/vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                        </svg></span>
                        <input class="form-control" name="email" type="text" value="<?= $data['email'] ?? '' ?>" placeholder="Email">
                    </div>
                    <p style="color: red;" ><?= $data['errors']['email'] ?? '' ?></p>
                    <div class="input-group mb-4"><span class="input-group-text">
                        <svg class="icon">
                            <use xlink:href="/duan1_Nhom12_WD18202/public/admin/vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                        </svg></span>
                        <input class="form-control" name="password" type="password" placeholder="Password">
                    </div>
                    <p style="color: red;" ><?= $data['errors']['password'] ?? '' ?></p>
                    <div class="row">
                        <div class="col-6">
                        <button class="btn btn-primary px-4" name="btn_login" type="submit">Login</button>
                        </div>
                        <div class="col-6 text-end">
                        <button class="btn btn-link px-0" type="button">Forgot password?</button>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="card col-md-5 text-white bg-primary py-5">
                    <div class="card-body text-center">
                    <div style="position: relative; top: 30px">
                        <h1>Sign up</h1>
                        <a href="http://localhost/duan1_Nhom12_WD18202/admin/admin_register"><button class="btn btn-lg btn-outline-light mt-3" type="button">Register Now!</button></a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</form>