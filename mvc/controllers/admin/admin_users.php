<?php
class admin_users extends Controller{
    public $admin_users;
    public function __construct(){
        $this->admin_users = $this->admin_Model("adminUser_Model");
    }

    public function Theme(){
        $users = $this->admin_users->selectUserById($_SESSION['id']);
        $tableUsers = $this->admin_users->selectUserByRole();
        $this->view_Admin("admin_users", [
            'page' => 'users',
            'users' => $users,
            'table' => $tableUsers
        ]);
    }
    

    public function getIdUserUpdate($id){
        $users = $this->admin_users->selectUserById($_SESSION['id']);
        $updateTable = $this->admin_users->selectUserById($id);
        $this->view_Admin("admin_users", [
            'page' => 'updateUser',
            'users' => $users,
            'update' => $updateTable
        ]);
    }

    public function updateFeature($id){
        $fullname = $_POST['fullname'];
        $phonenumber = $_POST['phonenumber'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $hashPass = password_hash($password, PASSWORD_DEFAULT);
        $role = $_POST['role'];
        $file = $_FILES['img'];
        $img = $_POST['img'];

        if ($file['size'] > 0) {
            $image = ['jpg', 'png', 'gif'];
            $img = $file['name'];
        }

        if(isset($_POST['btn_updateUser'])){
            $this->admin_users->updateUserById($id, $fullname, $phonenumber, $address, $email, $hashPass, $img, $role);
            move_uploaded_file($file['tmp_name'], "./public/img/".$img);
            header("location: http://localhost/live/admin/admin_users");
            exit();
        } else {
            
        }
    }

    public function deleteFeatureById($id){
        $this->admin_users->deleteUserById($id);
        header("location: http://localhost/live/admin/admin_users");
        exit();
    }

    public function deleteFeatureByCheckBox(...$ids){
        if(isset($_POST['ids']) && is_array($_POST['ids'])){
            $ids = $_POST['ids'];
            $this->admin_users->deleteUserByCheckBox(...$ids);
            header("location: http://localhost/live/admin/admin_users");
            exit();
        } else {
            header("location: http://localhost/live/admin/admin_users");
        }
    }
}