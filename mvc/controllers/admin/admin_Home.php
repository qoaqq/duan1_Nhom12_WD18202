<?php
    class admin_Home extends Controller {
        public $adminHome_Model;
        public $adminUser_Model;

    public function __construct(){
        $this->adminUser_Model = $this->admin_Model("adminUser_Model");
    }

    public function Theme(){
        $users = $this->adminUser_Model->selectUserById($_SESSION['id']);
        $this->view_Admin("admin_home", [
            'page' => 'home',
            'users' => $users
        ]);
    }
}
