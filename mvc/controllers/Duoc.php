DUONG QUANG DUOC
<?php
    class Duoc extends Controller {
        function Sayhi() {
            $this->model("SinhVienModel");
            $this->view("aoxau", [
                "page"=>"news"
            ]);
        }

        function Dat(){
            echo "DUONG THE DAT";
        }
    }
?>