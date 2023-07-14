<?php
    class admin_Home extends Controller {
        public $adminHome_Model;

    public function __construct(){
        $this->adminHome_Model = $this->admin_Model("adminHome_Model");
    }

    public function Theme(){
        $this->view_Admin("admin_home", [
            'page' => 'home'
        ]);
    }
}
