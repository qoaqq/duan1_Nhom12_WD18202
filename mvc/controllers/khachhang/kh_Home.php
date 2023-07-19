<?php

// http://localhost/live/Home/Show/1/2

    class kh_Home extends Controller {

        public $kh_Home;
    
        public function __construct(){
            $this->kh_Home = $this->model("danhmucModel");
        }

        public function Theme() {
            $this->view_admin("admin_Home");
        }
}

?>