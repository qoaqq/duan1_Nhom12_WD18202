<?php 
    
    class admin_Home extends Controller {
        public $danhmucModel;

    public function __construct(){
        $this->danhmucModel = $this->model("danhmucModel");
    }

    public function Theme(){
        $this->view_admin("admin_Home");
    }
}

?>