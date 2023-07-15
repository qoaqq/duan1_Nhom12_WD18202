<?php
class adminUser_Model extends DB{
    public function insertUser($tenkh, $sdt, $diachi, $email, $password, $anh, $vaitro) {
        $qr = "INSERT INTO khachhang(`tenkh`, `sdt`, `diachi`, `email`, `password`, `anh`, `vaitro`) 
        VALUES ('$tenkh', '$sdt', '$diachi', '$email', $password, '$anh', '$vaitro')";
        return mysqli_query($this->con, $qr);
   }

   public function selectUser() {
        $qr = "SELECT `email`, `password` FROM `khachhang`";
        return mysqli_query($this->con, $qr);
   }
}
?>