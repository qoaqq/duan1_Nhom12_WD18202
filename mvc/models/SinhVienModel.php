<?php
class SinhVienModel extends DB{
    public function insertSinhVien($fullname, $age, $email){
        $qr = "INSERT INTO tbl_users VALUES(null, '$fullname', '$age', '$email')";
        return mysqli_query($this->con, $qr);
    }
}
?>