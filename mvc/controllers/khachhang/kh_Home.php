<?php
class kh_Home extends Controller
{
    public $khachHang_Model;
    public function __construct()
    {
        $this->khachHang_Model = $this->khachHang_Model("khachHang_ModelInterface");
    }

    public function Theme()
    {
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

        //SELECT DANH MUC NAM
        $danhmuc_men = $this->khachHang_Model->selectDanhMucByMen();

        //SELECT DANH MUC NU
        $danhmuc_women = $this->khachHang_Model->selectDanhMucByWomen();

        //SELECT LOAI HANG NAM
        $loaihang_men = $this->khachHang_Model->selectDanhmuc_loaiHangMen();

        //SELECT LOAI HANG NU
        $loaihang_women = $this->khachHang_Model->selectDanhmuc_loaiHangWomen();

        $this->view_Khachhang("khachhang_Home", [
            'random_5sp' => $random_5sp,
            'select_4sp' => $select_4sp,
            'random_8sp' => $random_8sp,
            'random_new8sp' => $random_new8sp,
            'danhmuc_men' => $danhmuc_men,
            'danhmuc_women' => $danhmuc_women,
            'loaihang_men' => $loaihang_men,
            'loaihang_women' => $loaihang_women
        ]);
    }

    public function khachhang_Shop()
    {
        //SELECT DANH MUC NAM
        $danhmuc_men = $this->khachHang_Model->selectDanhMucByMen();

        //SELECT DANH MUC NU
        $danhmuc_women = $this->khachHang_Model->selectDanhMucByWomen();

        //SELECT LOAI HANG NAM
        $loaihang_men = $this->khachHang_Model->selectDanhmuc_loaiHangMen();

        //SELECT LOAI HANG NU
        $loaihang_women = $this->khachHang_Model->selectDanhmuc_loaiHangWomen();

        $totalRecords = $this->khachHang_Model->totalRecords();
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 12;
        $total_page = ceil($totalRecords / $limit);

        if ($current_page > $total_page) {
            $current_page = $total_page;
        } elseif ($current_page < 1) {
            $current_page = 1;
        }

        $start = ($current_page - 1) * $limit;
        $result = $this->khachHang_Model->pagiNationLimit($start, $limit);
        $pagiNation = [
            'current_page' => $current_page,
            'total_page' => $total_page
        ];


        $this->view_Khachhang("khachhang_Shop", [
            'pagiNation' => $pagiNation,
            'result' => $result,
            'danhmuc_men' => $danhmuc_men,
            'danhmuc_women' => $danhmuc_women,
            'loaihang_men' => $loaihang_men,
            'loaihang_women' => $loaihang_women
        ]);
    }

    public function khachhang_Loaihang($id)
    {
        //SELECT DANH MUC NAM
        $danhmuc_men = $this->khachHang_Model->selectDanhMucByMen();

        //SELECT DANH MUC NU
        $danhmuc_women = $this->khachHang_Model->selectDanhMucByWomen();

        //SELECT LOAI HANG NAM
        $loaihang_men = $this->khachHang_Model->selectDanhmuc_loaiHangMen();

        //SELECT LOAI HANG NU
        $loaihang_women = $this->khachHang_Model->selectDanhmuc_loaiHangWomen();

        //SELECT LOAI HANG BY ID
        $loaihang = $this->khachHang_Model->select_LoaihangById($id);

        $this->view_Khachhang("khachhang_Loaihang", [
            'loaihang' => $loaihang,
            'danhmuc_men' => $danhmuc_men,
            'danhmuc_women' => $danhmuc_women,
            'loaihang_men' => $loaihang_men,
            'loaihang_women' => $loaihang_women
        ]);
    }

    public function khachhang_sanPhamByGender($id_gioitinh)
    {
        //SELECT DANH MUC NAM
        $danhmuc_men = $this->khachHang_Model->selectDanhMucByMen();

        //SELECT DANH MUC NU
        $danhmuc_women = $this->khachHang_Model->selectDanhMucByWomen();

        //SELECT LOAI HANG NAM
        $loaihang_men = $this->khachHang_Model->selectDanhmuc_loaiHangMen();

        //SELECT LOAI HANG NU
        $loaihang_women = $this->khachHang_Model->selectDanhmuc_loaiHangWomen();

        $totalRecords = $this->khachHang_Model->totalRecords();
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 12;
        $total_page = ceil($totalRecords / $limit);

        if ($current_page > $total_page) {
            $current_page = $total_page;
        } elseif ($current_page < 1) {
            $current_page = 1;
        }

        $start = ($current_page - 1) * $limit;
        $sanpham = $this->khachHang_Model->selectSanphamByGender($id_gioitinh, $start, $limit);
        $pagiNation = [
            'current_page' => $current_page,
            'total_page' => $total_page
        ];

        $this->view_Khachhang("khachhang_LHbyGender", [
            'danhmuc_men' => $danhmuc_men,
            'danhmuc_women' => $danhmuc_women,
            'loaihang_men' => $loaihang_men,
            'loaihang_women' => $loaihang_women,
            'sanpham' => $sanpham,
            'pagiNation' => $pagiNation,
        ]);
    }

    public function khachhang_chitietSP($id_sanpham)
    {
        // RANDOM 8 SP 
        $this->khachHang_Model->updateRandomNumber();
        $random_8sp = $this->khachHang_Model->select8RandomProducts();

        //SELECT DANH MUC NAM
        $danhmuc_men = $this->khachHang_Model->selectDanhMucByMen();

        //SELECT DANH MUC NU
        $danhmuc_women = $this->khachHang_Model->selectDanhMucByWomen();

        //SELECT LOAI HANG NAM
        $loaihang_men = $this->khachHang_Model->selectDanhmuc_loaiHangMen();

        //SELECT LOAI HANG NU
        $loaihang_women = $this->khachHang_Model->selectDanhmuc_loaiHangWomen();

        $detailSP = $this->khachHang_Model->selectDetailProductById($id_sanpham);

        $detail_img = $this->khachHang_Model->selectImgSanPham($id_sanpham);

        $this->view_Khachhang("khachhang_chitietsp", [
            'danhmuc_men' => $danhmuc_men,
            'danhmuc_women' => $danhmuc_women,
            'loaihang_men' => $loaihang_men,
            'loaihang_women' => $loaihang_women,
            'detailSP' => $detailSP,
            'random_8sp' => $random_8sp,
            'detail_img' => $detail_img
        ]);
    }

    public function khachhang_cart(){
        $this->view_Khachhang("khachhang_Cart");
    }
}
