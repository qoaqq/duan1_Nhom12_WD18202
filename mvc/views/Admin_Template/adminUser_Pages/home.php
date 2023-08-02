<section class="text-center">
    <h1 style="font-size: 80px;">Welcome Back <?= $data['users']['tenkh'] ?></h1>
    <section>
        <img class="rounded-circle" src="/duan1_Nhom12_WD18202/public/img/<?= $data['users']['anh'] ?>" width="500" height="500" alt="">
    </section>
    <br>
    <div>
        <a href="http://localhost/duan1_Nhom12_WD18202/admin/admin_profile/<?= $data['users']['id'] ?>"><button class="btn btn-danger">EDIT PROFILE</button></a>
        <a href="http://localhost/duan1_Nhom12_WD18202/khachhang"><button class="btn btn-success">GO TO SHOP</button></a>
    </div>
</section>