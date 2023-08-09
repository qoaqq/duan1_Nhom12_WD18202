<?php
    class danhmucModel extends DB{
        
        public function insertDanhmuc($tendm, $loaiHang){
            $qr = "INSERT INTO danhmuc VALUES (null, '$tendm', $loaiHang)";
            return mysqli_query($this->con, $qr);
        }

        public function selectAll_gioitinhLoaiHang(){
            $qr = "SELECT gioitinh_loaihang.id, loaihang.ten_loaihang FROM `gioitinh_loaihang` 
            INNER JOIN loaihang ON gioitinh_loaihang.id = loaihang.id";
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
            $query = "SELECT danhmuc.id, danhmuc.ten_danhmuc, loaihang.ten_loaihang, danhmuc.id_gioitinhLoaihang FROM danhmuc 
            INNER JOIN gioitinh_loaihang ON gioitinh_loaihang.id = danhmuc.id_gioitinhLoaihang
            INNER JOIN loaihang ON loaihang.id = gioitinh_loaihang.id_loaihang
            WHERE danhmuc.id = $id";
            $result = mysqli_query($this->con, $query);
            return mysqli_fetch_assoc($result);
        }

        public function listDanhmuc(){
            $qr = "SELECT danhmuc.id, danhmuc.ten_danhmuc, loaihang.ten_loaihang, danhmuc.id_gioitinhLoaihang FROM danhmuc 
            INNER JOIN gioitinh_loaihang ON gioitinh_loaihang.id = danhmuc.id_gioitinhLoaihang
            INNER JOIN loaihang ON loaihang.id = gioitinh_loaihang.id_loaihang";
            $result = mysqli_query($this->con, $qr);
            return $result; 
        }        

        public function searchingDanhmucFeature($key){
            $qr = "SELECT * FROM danhmuc WHERE 
            id LIKE '%$key%' 
            OR ten_danhmuc LIKE '%$key%'
            OR id_gioitinhLoaihang LIKE '%$key%'
            ";
            return mysqli_query($this->con, $qr);
        }
    }
