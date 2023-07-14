<?php 
    class kh_Home extends Controller {

        public $kh_Home;
    
        public function __construct(){
            $this->kh_Home = $this->admin_Model("adminHome_Model");
        }

        public function Theme() {
            $this->view_Admin("admin_home", [
                'page' => 'home'
            ]);
        }
}
