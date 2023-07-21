<?php 
    class kh_Home extends Controller {

    
        public function __construct(){
        }

        public function Theme() {
            $this->view_Khachhang("khachhang_Home");
        }
}
