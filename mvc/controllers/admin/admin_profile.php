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
        $password = $_POST['password'];
        $file = $_FILES['img'];
        $img = $_POST['img'];

        if ($file['size'] > 0) {
            $img = $file['name'];
        }

        if(isset($_POST['btn_updateAdminProfile'])){
            $this->admin_profile->updateAdminProdfileById($id, $fullname, $phonenumber, $address, $email, $password, $img);
            move_uploaded_file($file['tmp_name'], "./public/img/".$img);
            header("location: http://localhost/live/admin/admin_profile/".$id);
            exit();
        } else {
            
        }
    }
}
