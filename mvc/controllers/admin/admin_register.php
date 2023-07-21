<?php
class admin_register extends Controller {
    public $admin_register;

    public function __construct(){
        $this->admin_register = $this->admin_Model("adminUser_Model");
    }

    public function Theme() {
        $this->view_Admin("admin_register", [
            'page' => 'register'
        ]);
    }


    public function InsertFeature() {
        ini_set ('display_errors', 1); 
        $fullname = $_POST['fullname'];
        $phonenumber = $_POST['phonenumber'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $hashPassword = password_hash($password, PASSWORD_DEFAULT);
        $active = $_POST['special'];
        $value = [
            'fullname' => $fullname,
            'phonenumber' => $phonenumber,
            'address' => $address,
            'email' => $email,
            'active' => $active
        ];
        $errors= array();

        if(empty($fullname)) {
            $errors['fullname'] = "Vui lòng nhập tên";
        }

        if(empty($phonenumber)){
            $errors['phonenumber'] = "Vui lòng nhập số điện thoại";
        }

        if(empty($address)){
            $errors['address'] = "Vui lòng nhập địa chỉ";
        }

        if(empty($email)){
            $errors['email'] = "Vui lòng nhập email";
        }

        if(empty($password)){
            $errors['password'] = "Vui lòng nhập mật khẩu";
        }

        

        $file = $_FILES['img'];
        $img = $file['name'];
        if ($file['size'] <= 0) {
            $errors['img'] = "Bạn cần nhập ảnh";
        } else {
            $img_type = ['jpg', 'png', 'gif'];
            $ext = pathinfo($img, PATHINFO_EXTENSION);
            if (!in_array($ext, $img_type)) {
                $errors['img'] = "File không phải là ảnh";
            }
        }

        if(empty($errors)) {
            try {
                $this->admin_register->insertUser($fullname, $phonenumber, $address, $email, $hashPassword, $img, $active);
                move_uploaded_file($file['tmp_name'], "./public/img/".$img);
                header("location: http://localhost/duan1_Nhom12_WD18202/admin/admin_login");
            } catch (Exception $e) {
                echo "Lỗi: " . $e->getMessage();
            }
        } else {
            $this->view_Admin("admin_register", [
                'errors' => $errors,
                'page' => 'register',
                'value' => $value
            ]);
        }
    }
}