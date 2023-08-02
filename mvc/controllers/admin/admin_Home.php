<?php
    class admin_Home extends Controller {
        public $adminHome_Model;
        public $adminUser_Model;

    public function __construct(){
        $this->adminUser_Model = $this->admin_Model("adminUser_Model");
    }

    public function Theme(){
        if(!isset($_SESSION['id'])){
            header("location: http://localhost/duan1_Nhom12_WD18202/admin/admin_login");
        } else {
            $users = $this->adminUser_Model->selectUserById($_SESSION['id']);
        }
        
        $this->view_Admin("admin_home", [
            'page' => 'home',
            'users' => $users
        ]);
    }
}
