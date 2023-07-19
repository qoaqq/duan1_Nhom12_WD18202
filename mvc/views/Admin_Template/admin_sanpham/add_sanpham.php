<form action="http://localhost/duan1_Nhom12_WD18202/admin/admin_sanpham/addSP_Feature" method="post" enctype="multipart/form-data">
        <h1>Thêm sản phẩm</h1>
    
        <div class="form-group">
            <label for="tensanpham">Tên sản phẩm</label>
            <input type="text" class="form-control" id="inputiddanhmuc" name="tensp">
            <p style="color: red;" ><?= $data['errors']['tensp'] ?? '' ?></p>
        </div>
        <div class="form-group">
            <label for="gia">Giá</label>
            <input type="number" class="form-control" id="inputdanhmuc" aria-describedby="emailHelp" name="gia">
            <p style="color: red;" ><?= $data['errors']['gia'] ?? '' ?></p>
        </div>
        <div class="form-group">
            <label for="img">Ảnh</label>
            <input type="file" class="form-control" id="inputdanhmuc" aria-describedby="emailHelp" name="anh">
            <img src="./public/images/<?php echo isset($image) ? $image : '' ?>" alt="" >
            <p style="color: red;" ><?= $data['errors']['anh'] ?? '' ?></p>
        </div>
        <div class="form-group">
            <label for="mota">Mô tả</label>
            <input type="text" class="form-control" id="inputdanhmuc" aria-describedby="emailHelp" name="mota">
            <p style="color: red;" ><?= $data['errors']['mota'] ?? '' ?></p>
        </div>
        <div class="form-group">
            <label for="soluong">Số lượng</label>
            <input type="number" class="form-control" id="inputdanhmuc" aria-describedby="emailHelp" name="soluong">
            <p style="color: red;" ><?= $data['errors']['soluong'] ?? '' ?></p>
        </div>
        <div class="form-group">
            <label for="idloaihang">ID loại hàng</label>
            <input type="text" class="form-control" id="inputdanhmuc" aria-describedby="emailHelp" name="idlh" disabled>
            
        </div>

        <button type="submit" class="btn btn-primary" name="btn_addSanpham">Thêm</button>
    </form>
