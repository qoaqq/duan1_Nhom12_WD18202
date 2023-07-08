<?php

// http://localhost/live/Home/Show/1/2

class Home extends Controller{

    public $SinhVienModel;

    public function __construct(){
        $this->SinhVienModel = $this->model("SinhVienModel");
    }

    public function SayHi(){
        $this->view("aodep", [
            "page"=>"register",
            "color"=>"red"
        ]);
    }

    public function InsertSV(){
        $fullname = $_POST["fullname"];
        $age = $_POST["age"];
        $email = $_POST["email"];    

        if (isset($_POST["btn_insertSV"])) {
            $this->SinhVienModel->insertSinhVien($fullname, $age, $email);
            header("Location: http://localhost/live/Home/");
            exit();
        }   

        $this->view("aodep", [
            "page"=>"register",
            "color"=>"red"
        ]);
    }
}
?>