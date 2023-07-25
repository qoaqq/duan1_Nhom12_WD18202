<?php
    class danhmucModel extends DB{
        
        public function insertDanhmuc($tendm, $loaiHang){
            $qr = "INSERT INTO danhmuc VALUES (null, '$tendm', $loaiHang)";
            return mysqli_query($this->con, $qr);
        }

        public function selectAll_gioitinhLoaiHang(){
            $qr = "SELECT * FROM gioitinh_loaihang";
            return mysqli_query($this->con, $qr);
        }

        public function updateDanhmuc($tendm, $id, $loaiHang) {
            $qr = "UPDATE `danhmuc` SET `ten_danhmuc`='$tendm', `id_loaihang`=$loaiHang  WHERE `id` = $id";
            return mysqli_query($this->con, $qr);
        }

        public function deleteDanhmuc(...$ids){
            $ids_list = implode(',', $ids);
            $qr = "DELETE FROM danhmuc WHERE `id` IN ($ids_list)";
            $result = mysqli_query($this->con, $qr);
            return $result;
        }
        
        
        public function getDanhmucById($id) {
            $query = "SELECT * FROM danhmuc WHERE id = $id";
            $result = mysqli_query($this->con, $query);
            return mysqli_fetch_assoc($result);
        }

        public function listDanhmuc(){
            $qr = "SELECT * FROM danhmuc";
            $result = mysqli_query($this->con, $qr);
            return $result; 
        }        
    }
   
?>