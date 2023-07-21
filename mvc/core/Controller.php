<?php
class Controller{

    public function admin_Model($model){
        require_once "./mvc/models/admin_Model/".$model.".php";
        return new $model;
    }

    public function view_Admin($view, $data=[]){
        require_once "./mvc/views/Admin_Template/Admin_Interface/".$view.".php";
    }

    public function view_Khachhang($view, $data=[]){
        require_once "./mvc/views/Khachhang_Template/Khachhang_Interface/".$view.".php";
    }
}
?>