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
        $username = $_POST['username'];
        $password = $_POST['password'];
        $errors = array();

        if(isset($errors)) {
            if(isset($_POST['btn_login'])){
                $result = $this->admin_login->selectUser();
                $a = $result->fetch_all(MYSQLI_ASSOC);
                
                echo "<pre>";
                print_r($a);
                echo "</pre>";
            }
        } else {
            $this->view_Admin("admin_login", [
                'page' => 'login',
                'errors' => $errors
            ]);
        }
    }
}