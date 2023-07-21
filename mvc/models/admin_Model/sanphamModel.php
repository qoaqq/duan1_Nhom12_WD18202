<?php 
    class sanphamModel extends DB{
        public function listSanpham(){
            $qr = "SELECT * FROM sanpham";
            $result = mysqli_query($this->con, $qr);
            return $result; 
        }

        public function selectAll_loaiHang(){
            $qr = "SELECT * FROM loaihang";
            return mysqli_query($this->con, $qr);
        }

        public function insertSanpham($tensp, $gia, $anh, $mota, $soluong, $loaihang){
            $qr = "INSERT INTO sanpham VALUES (null, '$tensp', '$gia', '$anh', '$mota', '$soluong', $loaihang)";
            return mysqli_query($this->con, $qr);
        }

        public function updateSanpham($id, $tensp, $gia, $anh, $mota, $soluong, $loaihang){
            $qr = "UPDATE `sanpham` SET `ten_sanpham` = '$tensp', `gia` = $gia, `anh` = '$anh', `mota` = '$mota', `soluong` = $soluong, `id_loaihang` = $loaihang WHERE `id` = $id";
            $result = mysqli_query($this->con, $qr);
            return $result;
        }

        public function deleteSanpham(...$ids){
            $ids_list = implode(',', $ids);
            $qr = "DELETE FROM sanpham WHERE `id` IN ($ids_list)";
            $result = mysqli_query($this->con, $qr);
            return $result;
        }
        

        public function getSanphamByID($id){
            $query = "SELECT * FROM sanpham WHERE id = $id";
            $result = mysqli_query($this->con, $query);
            return mysqli_fetch_assoc($result);
        }
    }
?>