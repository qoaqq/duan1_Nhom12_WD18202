<?php
class admin_profile extends Controller{
    public $admin_profile;
    public function __construct(){
        $this->admin_profile = $this->admin_Model("adminUser_Model");
    }

    public function Theme(){
        $users = $this->admin_profile->selectUserById($_SESSION['id']);
        $this->view_Admin("admin_profile", [
            'page' => 'profile',
            'users' => $users
        ]);
    }

    public function updateAdminProfile($id){
        $fullname = $_POST['fullname'];
        $phonenumber = $_POST['phonenumber'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $file = $_FILES['img'];
        $img = $_POST['img'];
        $errors = array();

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

        if ($file['size'] > 0) {
            $image = ['jpg', 'png', 'gif'];
            $img = $file['name'];
            $ext = pathinfo($img, PATHINFO_EXTENSION);
            if (!in_array($ext, $image)) {
                $errors['img'] = "File không phải là ảnh";
            }
        }

        if(empty($errors)){
            if(isset($_POST['btn_updateAdminProfile'])){
                $this->admin_profile->updateAdminProdfileById($id, $fullname, $phonenumber, $address, $email, $img);
                move_uploaded_file($file['tmp_name'], "./public/img/".$img);
                header("location: http://localhost/live/admin/admin_profile/".$id);
                exit();
            }
        }else{
            $users = $this->admin_profile->selectUserById($_SESSION['id']);
            $this->view_Admin("admin_profile", [
                'page' => 'profile',
                'users' => $users,
                'errors' => $errors
            ]);
        }
    }
}
