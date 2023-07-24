<?php
class khachHang_ModelInterface extends DB{
    public function selectAllSanpham(){
        $qr = "SELECT * FROM sanpham";
        return mysqli_query($this->con, $qr);
    }

    public function totalRecords(){
        $qr = "SELECT COUNT(`id`) AS total FROM sanpham";
        $result = mysqli_fetch_assoc(mysqli_query($this->con, $qr));
        $total_records = $result['total'];
        return $total_records;
    }
    
    public function select4Products(){
        $qr = "SELECT * FROM sanpham LIMIT 4";
        return mysqli_query($this->con, $qr);
    }

    public function pagiNationLimit($start, $limit){
        $qr = "SELECT * FROM sanpham LIMIT $start, $limit";
        return mysqli_query($this->con, $qr);
    }

    public function addRandomNumberColumn(){
        $qr = "ALTER TABLE sanpham ADD random_number INT";
        return mysqli_query($this->con, $qr);
    }

    public function updateRandomNumber(){
        $qr = "UPDATE sanpham SET random_number = FLOOR(RAND() * 10000)";
        return mysqli_query($this->con, $qr);
    }

    public function select5RandomProducts(){
        $qr = "SELECT * FROM sanpham ORDER BY random_number LIMIT 5";
        return mysqli_query($this->con, $qr);
    }

    public function select8RandomProducts(){
        $qr = "SELECT * FROM sanpham ORDER BY random_number LIMIT 8";
        return mysqli_query($this->con, $qr);
    }

    public function select8RandomNewProducts(){
        $qr = "SELECT * FROM sanpham ORDER BY random_number LIMIT 8";
        return mysqli_query($this->con, $qr);
    }
}