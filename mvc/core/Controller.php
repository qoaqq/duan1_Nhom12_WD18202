<?php
class Controller{

    public function model($model){
        require_once "./mvc/models/admin_Model/".$model.".php";
        return new $model;
    }

    public function view_admin($view, $data=[]){
        require_once "./mvc/views/Admin_Templete/".$view.".php";
    }

   

}
