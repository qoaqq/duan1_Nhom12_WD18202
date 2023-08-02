<?php
    class adminBill_Model extends DB{
        public function selectBillByKhachHang(){
            $qr = "SELECT bill.id, bill.id_khachhang, khachhang.tenkh, khachhang.sdt, khachhang.diachi, bill.total, bill.ngay_tao, bill.status 
            FROM bill INNER JOIN khachhang ON bill.id_khachhang = khachhang.id";
            return mysqli_query($this->con, $qr);
        }

        public function selectStatusBillById($id){
            //UPDATE `bill` SET `status` = 'Đã thanh toán' WHERE `bill`.`id` = 23;
            $qr = "SELECT `id`, `id_khachhang`, `status` FROM `bill` WHERE id = $id";
            return mysqli_fetch_assoc(mysqli_query($this->con, $qr));
        }

        public function selectAllBill(){
            $qr = "SELECT * FROM `bill`";
            return mysqli_query($this->con, $qr);
        }

        public function updateBillById($id, $status){
            $qr = "UPDATE `bill` SET `status` = '$status' WHERE `bill`.`id` = $id";
            echo $qr;
            return mysqli_query($this->con, $qr);
        }
    }
?>