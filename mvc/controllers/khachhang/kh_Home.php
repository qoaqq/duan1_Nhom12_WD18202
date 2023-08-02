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

        if (isset($_POST['btn_addToCart']) && isset($_POST['product_id'])) {
            $product_id = $_POST['product_id'];
            if (!isset($_SESSION['product']['id'])) {
                $_SESSION['product']['id'] = array();
            }
            if (!isset($_SESSION['product']['id'][$product_id])) {
                $_SESSION['product']['id'][$product_id] = 1;
            } else {
                $_SESSION['product']['id'][$product_id]++;
            }
            header("location: http://localhost/duan1_Nhom12_WD18202/khachhang");
        }

        if (isset($_SESSION['product']['id'])) {
            $select_session = $this->khachHang_Model->selectSanPhamBySessionLimit($_SESSION['product']['id']);
        } else {
            $select_session = [];
        }

        if (isset($_SESSION['product']['id'])) {
            $count_sp = $this->khachHang_Model->selectCountProductsById($_SESSION['product']['id']);
        } else {
            $count_sp = [];
        }

        $this->view_Khachhang("khachhang_Home", [
            'random_5sp' => $random_5sp,
            'select_4sp' => $select_4sp,
            'random_8sp' => $random_8sp,
            'random_new8sp' => $random_new8sp,
            'danhmuc_men' => $danhmuc_men,
            'danhmuc_women' => $danhmuc_women,
            'loaihang_men' => $loaihang_men,
            'loaihang_women' => $loaihang_women,
            'select_session' => $select_session,
            'count_sp' => $count_sp
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

        if (isset($_POST['btn_addToCart']) && isset($_POST['product_id'])) {
            $product_id = $_POST['product_id'];
            if (!isset($_SESSION['product']['id'])) {
                $_SESSION['product']['id'] = array();
            }
            if (!isset($_SESSION['product']['id'][$product_id])) {
                $_SESSION['product']['id'][$product_id] = 1;
            } else {
                $_SESSION['product']['id'][$product_id]++;
            }
            header("location: http://localhost/duan1_Nhom12_WD18202/khachhang/khachhang_shop");
        }

        if (isset($_SESSION['product']['id'])) {
            $select_session = $this->khachHang_Model->selectSanPhamBySessionLimit($_SESSION['product']['id']);
        } else {
            $select_session = [];
        }

        if (isset($_SESSION['product']['id'])) {
            $count_sp = $this->khachHang_Model->selectCountProductsById($_SESSION['product']['id']);
        } else {
            $count_sp = [];
        }

        $this->view_Khachhang("khachhang_Shop", [
            'pagiNation' => $pagiNation,
            'result' => $result,
            'danhmuc_men' => $danhmuc_men,
            'danhmuc_women' => $danhmuc_women,
            'loaihang_men' => $loaihang_men,
            'loaihang_women' => $loaihang_women,
            'count_sp' => $count_sp,
            'select_session' => $select_session
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

        if (isset($_POST['btn_addToCart']) && isset($_POST['product_id'])) {
            $product_id = $_POST['product_id'];
            if (!isset($_SESSION['product']['id'])) {
                $_SESSION['product']['id'] = array();
            }
            if (!isset($_SESSION['product']['id'][$product_id])) {
                $_SESSION['product']['id'][$product_id] = 1;
            } else {
                $_SESSION['product']['id'][$product_id]++;
            }
            header("location: http://localhost/duan1_Nhom12_WD18202/khachhang/khachhang_Loaihang/" . $id);
        }

        if (isset($_SESSION['product']['id'])) {
            $select_session = $this->khachHang_Model->selectSanPhamBySessionLimit($_SESSION['product']['id']);
        } else {
            $select_session = [];
        }

        if (isset($_SESSION['product']['id'])) {
            $count_sp = $this->khachHang_Model->selectCountProductsById($_SESSION['product']['id']);
        } else {
            $count_sp = [];
        }

        $this->view_Khachhang("khachhang_Loaihang", [
            'loaihang' => $loaihang,
            'danhmuc_men' => $danhmuc_men,
            'danhmuc_women' => $danhmuc_women,
            'loaihang_men' => $loaihang_men,
            'loaihang_women' => $loaihang_women,
            'count_sp' => $count_sp,
            'select_session' => $select_session
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

        if (isset($_POST['btn_addToCart']) && isset($_POST['product_id'])) {
            $product_id = $_POST['product_id'];
            if (!isset($_SESSION['product']['id'])) {
                $_SESSION['product']['id'] = array();
            }
            if (!isset($_SESSION['product']['id'][$product_id])) {
                $_SESSION['product']['id'][$product_id] = 1;
            } else {
                $_SESSION['product']['id'][$product_id]++;
            }
            header("location: http://localhost/duan1_Nhom12_WD18202/khachhang/khachhang_sanPhamByGender/" . $id_gioitinh);
        }

        if (isset($_SESSION['product']['id'])) {
            $select_session = $this->khachHang_Model->selectSanPhamBySessionLimit($_SESSION['product']['id']);
        } else {
            $select_session = [];
        }

        if (isset($_SESSION['product']['id'])) {
            $count_sp = $this->khachHang_Model->selectCountProductsById($_SESSION['product']['id']);
        } else {
            $count_sp = [];
        }

        $this->view_Khachhang("khachhang_LHbyGender", [
            'danhmuc_men' => $danhmuc_men,
            'danhmuc_women' => $danhmuc_women,
            'loaihang_men' => $loaihang_men,
            'loaihang_women' => $loaihang_women,
            'sanpham' => $sanpham,
            'pagiNation' => $pagiNation,
            'count_sp' => $count_sp,
            'select_session' => $select_session
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

        if (isset($_POST['btn_addToCart']) && isset($_POST['product_id'])) {
            $product_id = $_POST['product_id'];
            if (!isset($_SESSION['product']['id'])) {
                $_SESSION['product']['id'] = array();
            }
            if (!isset($_SESSION['product']['id'][$product_id])) {
                $_SESSION['product']['id'][$product_id] = 1;
            } else {
                $_SESSION['product']['id'][$product_id]++;
            }
            header("location: http://localhost/duan1_Nhom12_WD18202/khachhang/khachhang_chitietSP/" . $id_sanpham);
        }

        if (isset($_SESSION['product']['id'])) {
            $select_session = $this->khachHang_Model->selectSanPhamBySessionLimit($_SESSION['product']['id']);
        } else {
            $select_session = [];
        }

        if (isset($_SESSION['product']['id'])) {
            $count_sp = $this->khachHang_Model->selectCountProductsById($_SESSION['product']['id']);
        } else {
            $count_sp = [];
        }

        $this->view_Khachhang("khachhang_chitietsp", [
            'danhmuc_men' => $danhmuc_men,
            'danhmuc_women' => $danhmuc_women,
            'loaihang_men' => $loaihang_men,
            'loaihang_women' => $loaihang_women,
            'detailSP' => $detailSP,
            'random_8sp' => $random_8sp,
            'detail_img' => $detail_img,
            'count_sp' => $count_sp,
            'select_session' => $select_session
        ]);
    }

    public function khachhang_cart()
    {
        //SELECT DANH MUC NAM
        $danhmuc_men = $this->khachHang_Model->selectDanhMucByMen();

        //SELECT DANH MUC NU
        $danhmuc_women = $this->khachHang_Model->selectDanhMucByWomen();

        //SELECT LOAI HANG NAM
        $loaihang_men = $this->khachHang_Model->selectDanhmuc_loaiHangMen();

        //SELECT LOAI HANG NU
        $loaihang_women = $this->khachHang_Model->selectDanhmuc_loaiHangWomen();

        if (isset($_GET['remove'])) {
            $id_remove = $_GET['remove'];
            unset($_SESSION['product']['id'][$id_remove]);
            header("location: http://localhost/duan1_Nhom12_WD18202/khachhang/khachhang_cart");
            exit();
        }

        if (!isset($_SESSION['product']) || !is_array($_SESSION['product'])) {
            $_SESSION['product'] = array();
        }

        if (isset($_POST['btn_addToCart']) && isset($_POST['product_id'])) {
            $product_id = $_POST['product_id'];
            if (!isset($_SESSION['product']['id'])) {
                $_SESSION['product']['id'] = array();
            }
            if (!isset($_SESSION['product']['id'][$product_id])) {
                $_SESSION['product']['id'][$product_id] = 1;
            } else {
                $_SESSION['product']['id'][$product_id]++;
            }
            header("location: http://localhost/duan1_Nhom12_WD18202/khachhang/khachhang_shop");
        }
        if (isset($_SESSION['product']['id'])) {
            $select_session = $this->khachHang_Model->selectSanPhamBySession($_SESSION['product']['id']);
        } else {
            $select_session = [];
        }

        if (isset($_SESSION['product']['id'])) {
            $select_session_limit = $this->khachHang_Model->selectSanPhamBySessionLimit($_SESSION['product']['id']);
        } else {
            $select_session_limit = [];
        }

        if (isset($_SESSION['product']['id'])) {
            $count_sp = $this->khachHang_Model->selectCountProductsById($_SESSION['product']['id']);
        } else {
            $count_sp = [];
        }

        // session_unset();
        $this->view_Khachhang("khachhang_Cart", [
            'danhmuc_men' => $danhmuc_men,
            'danhmuc_women' => $danhmuc_women,
            'loaihang_men' => $loaihang_men,
            'loaihang_women' => $loaihang_women,
            'select_session' => $select_session,
            'select_session_limit' => $select_session_limit,
            'count_sp' => $count_sp
        ]);
    }

    public function clearCart()
    {
        unset($_SESSION['product']['id']);
        header("location: http://localhost/duan1_Nhom12_WD18202/khachhang/khachhang_cart");
        exit;
    }

    public function khachhang_checkout()
    {
        //SELECT DANH MUC NAM
        $danhmuc_men = $this->khachHang_Model->selectDanhMucByMen();

        //SELECT DANH MUC NU
        $danhmuc_women = $this->khachHang_Model->selectDanhMucByWomen();

        //SELECT LOAI HANG NAM
        $loaihang_men = $this->khachHang_Model->selectDanhmuc_loaiHangMen();

        //SELECT LOAI HANG NU
        $loaihang_women = $this->khachHang_Model->selectDanhmuc_loaiHangWomen();



        if (isset($_POST['btn_checkout'])) {
            // if (isset($_POST)) {
            //     $detail_bill = $_POST;
            // } else {
            //     $detail_bill = [];
            // }

            // if (isset($_SESSION['id'])) {
            //     $user = $this->khachHang_Model->selectKhachHang($_SESSION['id']);
            // } else {
            //     $user = [];
            // }
            echo "1111111";
            echo "btn_checkout";
        }elseif(isset($_POST['btn_updateCart'])){
            echo "btn_updateCart";
            echo "<pre>";
            print_r($_SESSION);
            echo "</pre>";

            echo "<pre>";
            print_r($_POST);
            echo "</pre>";
        }

        // $this->view_Khachhang("khachhang_Checkout", [
        //     'danhmuc_men' => $danhmuc_men,
        //     'danhmuc_women' => $danhmuc_women,
        //     'loaihang_men' => $loaihang_men,
        //     'loaihang_women' => $loaihang_women,
        //     'detail_bill' => $detail_bill,
        //     'user' => $user
        // ]);
    }

    public function orderSuccess()
    {
        $id_user = $_SESSION['id'];
        $grand_total = $_POST['grand_total'];

        if (isset($_POST['btn_checkOut'])) {
            $id_bill = $this->khachHang_Model->insertBill($id_user, $grand_total);

            if ($id_bill) {
                if (isset($_POST['products'])) {
                    $products = $_POST['products'];
                    foreach ($products as $product) {
                        $id_sanpham = $product['id'];
                        $soluong = $product['quantity'];
                        $total_price = $product['total_price'];
                        $this->khachHang_Model->insertChitietbill($id_bill, $id_sanpham, $soluong, $total_price);
                    }
                } else {
                    $products = [];
                }
            } else {
                echo "Insert bill failed.";
            }
            unset($_SESSION['product']['id']);
            header("location: http://localhost/duan1_Nhom12_WD18202/khachhang/notificationOrder");
            exit;
        }
    }

    public function notificationOrder()
    {
        //SELECT DANH MUC NAM
        $danhmuc_men = $this->khachHang_Model->selectDanhMucByMen();

        //SELECT DANH MUC NU
        $danhmuc_women = $this->khachHang_Model->selectDanhMucByWomen();

        //SELECT LOAI HANG NAM
        $loaihang_men = $this->khachHang_Model->selectDanhmuc_loaiHangMen();

        //SELECT LOAI HANG NU
        $loaihang_women = $this->khachHang_Model->selectDanhmuc_loaiHangWomen();

        $this->view_Khachhang("khachhang_Success", [
            'danhmuc_men' => $danhmuc_men,
            'danhmuc_women' => $danhmuc_women,
            'loaihang_men' => $loaihang_men,
            'loaihang_women' => $loaihang_women,
        ]);
    }
}
