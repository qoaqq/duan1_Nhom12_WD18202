<?php 
class admin_login extends Controller {
    public $admin_login;
    public function __construct(){
        $this->admin_login = $this->admin_Model("adminUser_Model");
    }

    public function Theme(){
        $this->view_Admin("admin_login", [
            'page' => 'login'
        ]);
    }

    public function loginFeature(){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $errors = array();
        $checkLoggedIn = false;

        if(isset($_POST['btn_login'])){
            if(empty($email)){
                $errors['email'] = "Vui long nhap vao email";
            }
            if(empty($password)){
                $errors['password'] = "Vui long nhap vao mat khau";
            }
            
            if(!empty($email) && !empty($password)){
                $users = $this->admin_login->selectUserByEmail($email);
                if(!empty($users)){
                    if(password_verify($password, $users['password'])){
                        $checkLoggedIn = true;
                        if($checkLoggedIn == true) {
                            $_SESSION['id'] = $users['id'];
                            $this->admin_login->selectUserById($_SESSION['id']);
                            header("Location: http://localhost/duan1_Nhom12_WD18202/admin");
                            exit;
                        }
                    }else{
                        $errors['user']="Email hoac mat khau khong chinh xac";
                    }
                }
            }
        } 

        if(!empty($errors)){
            $this->view_Admin("admin_login", [
                'page' => 'login',
                'errors' => $errors
            ]);
        }
    }

    public function logOutFeature() {
        session_unset();
        header("location: http://localhost/live/admin/admin_login");
        exit();
    }
}