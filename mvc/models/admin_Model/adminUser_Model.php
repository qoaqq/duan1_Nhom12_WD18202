<?php
class adminUser_Model extends DB{
    public function insertUser($tenkh, $sdt, $diachi, $email, $anh, $vaitro) {
        $qr = "INSERT INTO khachhang(`tenkh`, `sdt`, `diachi`, `email`, `anh`, `vaitro`) 
        VALUES ('$tenkh', $sdt, '$diachi', '$email', '$anh', '$vaitro')";
        return mysqli_query($this->con, $qr);
   }
}
?>