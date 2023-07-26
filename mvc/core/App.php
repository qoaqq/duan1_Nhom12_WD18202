<?php
class App{

    protected $controller="kh_Home";
    protected $action="Theme";
    protected $params=[];

    function __construct(){
 
        $arr = $this->UrlProcess();
        // Controller
        if(!empty($arr[0]) && $arr[0]=="admin"){
            $controller=!empty($arr[1]) ? $arr[1]: "admin_Home";
            $controllerPath="./mvc/controllers/admin/".$controller.".php";
            if(file_exists($controllerPath)){
                require_once $controllerPath;
                $this->controller=$controller;
                
            }
            else{
                require_once "./mvc/controllers/khachhang/kh_Home.php";
                $this->controller="kh_Home";
            }
        }
        else{
            if(empty($arr[0])){
                $this->controller="kh_Home";
            }
            else{
                $this->controller=$arr[0];
            }
            $controllerPath="./mvc/controllers/khachhang/".$this->controller.".php";
            if(file_exists($controllerPath)){
                require_once "./mvc/controllers/khachhang/".$this->controller.".php";
            }
            else {
                require_once "./mvc/controllers/khachhang/kh_Home.php";
                $this->controller="kh_Home";
            }
        }
        $this->controller = new $this->controller;

        //Action
        if(!empty($arr[0]) && $arr[0]=="admin"){
            $action=!empty($arr[2]) ? $arr[2] : "Theme";
            if( method_exists( $this->controller , $action) ){
                $this->action = $action;
            }
        }else{
            $action=!empty($arr[1]) ? $arr[1] : "Theme";
            if( method_exists( $this->controller , $action) ){
                $this->action = $action;
            }
        }

        // echo "<pre>";
        // print_r($arr);
        // echo "</pre>";

    
        if(!empty($arr[0]) && $arr[0]=="admin"){
            unset($arr[0]);
            unset($arr[1]);
            unset($arr[2]);
        }else{
            unset($arr[0]);
            unset($arr[1]);
        }

        // Params
        $this->params = $arr?array_values($arr):[];

        call_user_func_array([$this->controller, $this->action], $this->params );
    }

    function UrlProcess(){
        if( isset($_GET["url"]) ){
            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }
}
?>