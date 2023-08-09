<?php
    class adminBill_Model extends DB{
        public function selectBillByKhachHang(){
            $qr = "SELECT bill.id, bill.id_khachhang, khachhang.tenkh, khachhang.sdt, khachhang.diachi, bill.total, bill.ngay_tao, status_bill.status_name
            FROM bill 
            INNER JOIN khachhang ON bill.id_khachhang = khachhang.id
            INNER JOIN status_bill ON status_bill.id = bill.id_status
            ";
            return mysqli_query($this->con, $qr);
        }

        public function selectBillById($id) {
            $qr = "SELECT bill.id, bill.id_status, status_bill.status_name FROM bill 
            INNER JOIN status_bill ON bill.id_status = status_bill.id
            WHERE bill.id = $id";
            return mysqli_fetch_assoc(mysqli_query($this->con, $qr));
        }

        public function seletAllstatusBill(){
            $qr = "SELECT * FROM status_bill";
            return mysqli_query($this->con, $qr);
        }

        public function selectAllBill(){
            $qr = "SELECT * FROM `bill`";
            return mysqli_query($this->con, $qr);
        }

        public function updateBillById($id, $id_status){
            $qr = "UPDATE `bill` SET `id_status` = $id_status WHERE id = $id";
            return mysqli_query($this->con, $qr);
        }

        public function searchingBillFeature($key){
            $qr = "SELECT bill.id, bill.id_khachhang, khachhang.tenkh, khachhang.sdt, khachhang.diachi, bill.total, bill.ngay_tao 
            FROM bill INNER JOIN khachhang ON bill.id_khachhang = khachhang.id WHERE 
            bill.id LIKE '%$key%' 
            OR bill.id_khachhang LIKE '%$key%'
            OR khachhang.tenkh LIKE '%$key%'
            OR khachhang.sdt LIKE '%$key%'
            OR khachhang.diachi LIKE '%$key%'
            OR bill.total LIKE '%$key%'
            OR bill.ngay_tao LIKE '%$key%'
            OR bill.status LIKE '%$key%'
            ";
            return mysqli_query($this->con, $qr);
        }
    }
