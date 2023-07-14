<?php
class Controller{

    public function admin_Model($model){
        require_once "./mvc/models/admin_Model/".$model.".php";
        return new $model;
    }

    public function view_Admin($view, $data=[]){
        require_once "./mvc/views/Admin_Template/".$view.".php";
    }
}
?>