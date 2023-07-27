<?php
class khachHang_ModelInterface extends DB
{
   public function selectAllSanpham()
   {
      $qr = "SELECT * FROM sanpham";
      return mysqli_query($this->con, $qr);
   }

   public function totalRecords()
   {
      $qr = "SELECT COUNT(`id`) AS total FROM sanpham";
      $result = mysqli_fetch_assoc(mysqli_query($this->con, $qr));
      $total_records = $result['total'];
      return $total_records;
   }

   public function select4Products()
   {
      $qr = "SELECT * FROM sanpham LIMIT 4";
      return mysqli_query($this->con, $qr);
   }

   public function pagiNationLimit($start, $limit)
   {
      $qr = "SELECT * FROM sanpham LIMIT $start, $limit";
      return mysqli_query($this->con, $qr);
   }

   public function addRandomNumberColumn()
   {
      $qr = "ALTER TABLE sanpham ADD random_number INT";
      return mysqli_query($this->con, $qr);
   }

   public function updateRandomNumber()
   {
      $qr = "UPDATE sanpham SET random_number = FLOOR(RAND() * 10000)";
      return mysqli_query($this->con, $qr);
   }

   public function select5RandomProducts()
   {
      $qr = "SELECT * FROM sanpham ORDER BY random_number LIMIT 5";
      return mysqli_query($this->con, $qr);
   }

   public function select8RandomProducts()
   {
      $qr = "SELECT * FROM sanpham ORDER BY random_number LIMIT 8";
      return mysqli_query($this->con, $qr);
   }

   public function select8RandomNewProducts()
   {
      $qr = "SELECT * FROM sanpham ORDER BY random_number LIMIT 8";
      return mysqli_query($this->con, $qr);
   }

   public function selectDanhMucByMen()
   {
      $qr = "SELECT danhmuc.ten_danhmuc, gioitinh_loaihang.id_gioitinh FROM `danhmuc` 
       INNER JOIN gioitinh_loaihang ON danhmuc.id_gioitinhLoaihang = gioitinh_loaihang.id 
       WHERE ten_danhmuc = 'Men'";
      return mysqli_fetch_assoc(mysqli_query($this->con, $qr));
   }

   public function selectDanhMucByWomen()
   {
      $qr = "SELECT danhmuc.ten_danhmuc, gioitinh_loaihang.id_gioitinh FROM `danhmuc` 
       INNER JOIN gioitinh_loaihang ON danhmuc.id_gioitinhLoaihang = gioitinh_loaihang.id 
       WHERE ten_danhmuc = 'Women'";
      return mysqli_fetch_assoc(mysqli_query($this->con, $qr));
   }

   public function selectDanhmuc_loaiHangMen()
   {
      $qr = "SELECT gioitinh_loaihang.id_gioitinh, gioitinh_loaihang.id_loaihang, loaihang.ten_loaihang FROM `gioitinh_loaihang` 
       INNER JOIN loaihang ON gioitinh_loaihang.id_loaihang = loaihang.id 
       WHERE gioitinh_loaihang.id_gioitinh = 1";
      return mysqli_query($this->con, $qr);
   }

   public function selectDanhmuc_loaiHangWomen()
   {
      $qr = "SELECT gioitinh_loaihang.id_gioitinh, gioitinh_loaihang.id_loaihang, loaihang.ten_loaihang FROM `gioitinh_loaihang` 
       INNER JOIN loaihang ON gioitinh_loaihang.id_loaihang = loaihang.id 
       WHERE gioitinh_loaihang.id_gioitinh = 2";
      return mysqli_query($this->con, $qr);
   }

   public function select_LoaihangById($id)
   {
      $qr = "SELECT sanpham.id, sanpham.ten_sanpham, sanpham.gia, sanpham.anh, sanpham.id_loaihang FROM sanpham 
       INNER JOIN loaihang ON sanpham.id_loaihang = loaihang.id 
       WHERE loaihang.id = $id";
      return mysqli_query($this->con, $qr);
   }

   public function selectSanphamByGender($id_gioitinh, $start, $limit)
   {
      $qr = "SELECT gioitinh_loaihang.id_gioitinh, sanpham.ten_sanpham, sanpham.id, sanpham.gia, sanpham.anh FROM gioitinh_loaihang 
        INNER JOIN sanpham ON sanpham.id_loaihang = gioitinh_loaihang.id_loaihang 
        WHERE gioitinh_loaihang.id_gioitinh = $id_gioitinh LIMIT $start, $limit";
      return mysqli_query($this->con, $qr);
   }

   public function selectDetailProductById($id_sanpham)
   {
      $qr = "SELECT sanpham.id, sanpham.ten_sanpham, sanpham.gia, sanpham.anh, sanpham.mota, sanpham.soluong, GROUP_CONCAT(tag.ten_tag SEPARATOR ', ') AS tags
      FROM sanpham
      INNER JOIN chitietsp ON sanpham.id = chitietsp.id_sanpham
      INNER JOIN tag ON chitietsp.id_tag = tag.id
      WHERE sanpham.id = $id_sanpham
      GROUP BY sanpham.id, sanpham.ten_sanpham, sanpham.gia, sanpham.anh;
      ";
      return mysqli_fetch_assoc(mysqli_query($this->con, $qr));
   }

   public function selectImgSanPham($id_sanpham)
   {
      $qr = "SELECT anh_sanpham.ten_anh, anh_sanpham.id_sanpham, anh_sanpham.id
      FROM `anh_sanpham` 
      INNER JOIN sanpham ON sanpham.id = anh_sanpham.id_sanpham 
      WHERE sanpham.id = $id_sanpham";
      return mysqli_query($this->con, $qr);
   }
}
