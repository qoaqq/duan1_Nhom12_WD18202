<form method="post" enctype="multipart/form-data" action="http://localhost/duan1_Nhom12_WD18202/admin/admin_users/insertFeature" class="container">
    </br>
    <div class="form-group">
        <label for="exampleInputEmail1">Name:</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="fullname" >
    </div>
    <p style="color: red;"><?= $data['errors']['fullname'] ?? '' ?></p>
    </br>
    <div class="form-group">
        <label for="exampleInputPassword1">Phonenumber:</label>
        <input type="number" class="form-control" id="exampleInputPassword1" name="phonenumber" >
    </div>
    <p style="color: red;"><?= $data['errors']['phonenumber'] ?? '' ?></p>
    </br>
    <div class="form-group">
        <label for="exampleInputPassword1">Address:</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="address" >
    </div>
    <p style="color: red;"><?= $data['errors']['address'] ?? '' ?></p>
    </br>
    <div class="form-group">
        <label for="exampleInputPassword1">Email</label>
        <input type="email" class="form-control" id="exampleInputPassword1" name="email" >
    </div>
    <p style="color: red;"><?= $data['errors']['email'] ?? '' ?></p>
    </br>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="password" >
    </div>
    <p style="color: red;"><?= $data['errors']['password'] ?? '' ?></p>
    </br>
    <div class="form-group">
        <label for="exampleInputPassword1">Image:</label>
        <input type="file" name="img">
    </div>
    <p style="color: red;"><?= $data['errors']['img'] ?? '' ?></p>
    </br>
    <button type="submit" name="btn_insertUser" class="btn btn-primary">Add</button>
</form>