<?php
     class adminUser_Model extends DB{
          public function insertUser($tenkh, $sdt, $diachi, $email, $password, $anh, $vaitro) {
               $qr = "INSERT INTO khachhang(`tenkh`, `sdt`, `diachi`, `email`, `password`, `anh`, `vaitro`) 
               VALUES ('$tenkh', '$sdt', '$diachi', '$email', '$password', '$anh', b'$vaitro')";
               return mysqli_query($this->con, $qr);
          }

          public function selectAllUsers(){
               $qr = "SELECT * FROM `khachhang`";
               $result = mysqli_query($this->con, $qr);
               if(!empty($result)) return $result;
                    return '';
          }

          public function selectUserByEmail($email) {
               $qr = "SELECT * FROM `khachhang` WHERE `email`='$email'";
               $result = mysqli_fetch_assoc(mysqli_query($this->con, $qr));
               if(!empty($result)) return $result;
                    return '';
          }

          public function selectUserById($id) {
               $qr = "SELECT * FROM `khachhang` WHERE `id`=$id";
               $result = mysqli_fetch_assoc(mysqli_query($this->con, $qr));
               if(!empty($result)) return $result;
                    return '';
          }

          public function selectUserByRole(){
               $qr = "SELECT * FROM `khachhang` WHERE `vaitro`=b'0'";
               $result = mysqli_query($this->con, $qr);
               if(!empty($result)) return $result;
                    return '';
          }

          public function updateUserById($id, $tenkh, $sdt, $diachi, $email, $password, $anh, $vaitro) {
               $qr = "UPDATE `khachhang` SET `tenkh`='$tenkh',`sdt`='$sdt',`diachi`='$diachi',`email`='$email',`password`='$password',`anh`='$anh',`vaitro`=b'$vaitro' 
               WHERE `id`=$id";
               return mysqli_query($this->con, $qr);
          }

          public function insertUserByRole0($tenkh, $sdt, $diachi, $email, $password, $anh) {
               $qr = "INSERT INTO `khachhang`(`tenkh`, `sdt`, `diachi`, `email`, `password`, `anh`, `vaitro`) VALUES 
               ('$tenkh', $sdt, '$diachi', '$email', '$password', '$anh', b'0')";
               echo $qr;
               return mysqli_query($this->con, $qr);
          }

          public function updateUserByIdRole($id, $tenkh, $sdt, $diachi, $email, $password, $anh){
               $qr = "UPDATE `khachhang` SET `tenkh`='$tenkh',`sdt`='$sdt',`diachi`='$diachi',`email`='$email',`password`='$password',`anh`='$anh' 
               WHERE `vaitro`=b'0' AND `id`=$id";
               return mysqli_query($this->con, $qr);
          }

          public function updateAdminProdfileById($id, $tentk, $sdt, $diachi, $email, $anh){
               $qr = "UPDATE `khachhang` SET `tenkh`='$tentk',`sdt`='$sdt',`diachi`='$diachi',`email`='$email',`anh`='$anh' 
               WHERE `id`=$id";
               return mysqli_query($this->con, $qr);
          }

          public function deleteUserById($id){
               $qr = "DELETE FROM `khachhang` WHERE `id`=$id";
               return mysqli_query($this->con, $qr);
          }

          public function deleteUserByCheckBox(...$ids){
               $ids_list = implode(',', $ids);
               $qr = "DELETE FROM `khachhang` WHERE `id` IN ($ids_list)";
               return mysqli_query($this->con, $qr);
          }
     }
