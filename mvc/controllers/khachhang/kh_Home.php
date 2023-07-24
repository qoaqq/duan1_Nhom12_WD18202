<?php 
    class kh_Home extends Controller {
        public $khachHang_Model;
        public function __construct(){
            $this->khachHang_Model = $this->khachHang_Model("khachHang_ModelInterface");
        }

        public function Theme() {
           // RANDOM 5 SP 
           $this->khachHang_Model->updateRandomNumber();
           $random_5sp = $this->khachHang_Model->select5RandomProducts();
           
           // RANDOM 8 SP 
           $this->khachHang_Model->updateRandomNumber();
           $random_8sp = $this->khachHang_Model->select8RandomProducts();
           
           // RANDOM 8 NEWSP 
           $this->khachHang_Model->updateRandomNumber();
           $random_new8sp = $this->khachHang_Model->select8RandomNewProducts();
           
           //SELECT 4 SP
           $select_4sp = $this->khachHang_Model->select4Products();

           //SELECT ALL DANH MUC
           $danhmuc = $this->khachHang_Model->selectAllDanhMuc();

           //SELECT ALL LOAI HANG
           $loaihang = $this->khachHang_Model->selectAll_loaiHang();
           
           $this->view_Khachhang("khachhang_Home", [
                'random_5sp' => $random_5sp,
                'select_4sp' => $select_4sp,
                'random_8sp' => $random_8sp,
                'random_new8sp' => $random_new8sp,
                'danhmuc' => $danhmuc,
                'loaihang' => $loaihang
           ]);
        }

        public function khachhang_Shop() {
            $sp = $this->khachHang_Model->selectAllSanpham();
            $totalRecords = $this->khachHang_Model->totalRecords();
            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
            $limit = 12;
            $total_page = ceil($totalRecords / $limit);

            if($current_page > $total_page) {
                $current_page = $total_page;
            }elseif($current_page < 1){
                $current_page = 1;
            }

            $start = ($current_page - 1) * $limit;
            $result = $this->khachHang_Model->pagiNationLimit($start, $limit);
            $pagiNation = [
                'current_page' => $current_page,
                'total_page' => $total_page
            ];


            $this->view_Khachhang("khachhang_Shop", [
                'sp' => $sp,
                'pagiNation' => $pagiNation,
                'result' => $result
            ]);
        }
}
