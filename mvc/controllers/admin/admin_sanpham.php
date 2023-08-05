<?php
class admin_sanpham extends Controller
{

    public $sanphamModel;
    public $adminUser_Model;
    public function __construct()
    {
        $this->sanphamModel = $this->admin_Model("sanphamModel");
        $this->adminUser_Model = $this->admin_Model("adminUser_Model");
    }

    public function Theme()
    {
        if (!isset($_SESSION['id'])) {
            header("location: http://localhost/duan1_Nhom12_WD18202/admin/admin_login");
        } else {
            $users = $this->adminUser_Model->selectUserById($_SESSION['id']);
        }


        if (isset($_GET['search']) && !empty($_GET['search'])) {
            $key = $_GET['search'];
            $listsp = $this->sanphamModel->listSanpham();
            $totalRecords = $this->sanphamModel->totalRecords();
            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
            $limit = 5;
            $total_page = ceil($totalRecords / $limit);

            if ($current_page > $total_page) {
                $current_page = $total_page;
            } elseif ($current_page < 1) {
                $current_page = 1;
            }

            $start = ($current_page - 1) * $limit;
            $result = $this->sanphamModel->pagiNationSearchingLimit($key, $start, $limit);
        } else {
            $listsp = $this->sanphamModel->listSanpham();
            $totalRecords = $this->sanphamModel->totalRecords();
            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
            $limit = 5;
            $total_page = ceil($totalRecords / $limit);

            if ($current_page > $total_page) {
                $current_page = $total_page;
            } elseif ($current_page < 1) {
                $current_page = 1;
            }

            $start = ($current_page - 1) * $limit;
            $result = $this->sanphamModel->pagiNationLimit($start, $limit);
        }
        
        $pagiNation = [
            'current_page' => $current_page,
            'total_page' => $total_page
        ];

        $this->view_admin("admin_sanpham", [
            'page' => 'sanpham_page',
            'listsp' => $listsp,
            'users' => $users,
            'pagiNation' => $pagiNation,
            'result' => $result
        ]);
    }

    public function addSP_Theme()
    {
        $loaiHang = $this->sanphamModel->selectAll_loaiHang();
        if (!isset($_SESSION['id'])) {
            header("location: http://localhost/duan1_Nhom12_WD18202/admin/admin_login");
        } else {
            $users = $this->adminUser_Model->selectUserById($_SESSION['id']);
        }
        $this->view_admin("admin_sanpham", [
            'page' => "add_sanpham",
            'users' => $users,
            'loaiHang' => $loaiHang
        ]);
    }

    public function addSP_Feature()
    {
        $loaiHang = $this->sanphamModel->selectAll_loaiHang();
        if (!isset($_SESSION['id'])) {
            header("location: http://localhost/duan1_Nhom12_WD18202/admin/admin_login");
        } else {
            $users = $this->adminUser_Model->selectUserById($_SESSION['id']);
        }

        $tensp = $_POST['tensp'];
        $gia = $_POST['gia'];
        $mota = $_POST['mota'];
        $soluong = $_POST['soluong'];
        $idlh = $_POST['idlh'];
        $file = $_FILES['anh'];
        $img = $file['name'];
        $errors = array();

        if (empty($tensp)) {
            $errors['tensp'] = "Must fill the name product";
        }
        if ($gia <= 0 && (empty($gia))) {
            $errors['gia'] = "Must fill the price";
        }
        if ($soluong <= 0 && (empty($soluong))) {
            $errors['soluong'] = "Must fill the quantity";
        }

        if ($file['size'] <= 0) {
            $errors['anh'] = "You need to upload file";
            $this->view_admin("admin_sanpham", [
                'page' => 'add_sanpham',
                'errors' => $errors,
                'users' => $users,
                'loaiHang' => $loaiHang
            ]);
        } else {
            $image = ['jpg', 'png', 'gif'];
            $ext = pathinfo($img, PATHINFO_EXTENSION);
            if (!in_array($ext, $image)) {
                $errors['anh'] = "This is not a img file";
                $this->view_admin("admin_sanpham", [
                    'page' => 'add_sanpham',
                    'errors' => $errors,
                    'users' => $users,
                    'loaiHang' => $loaiHang
                ]);
            }
        }
        if (empty($errors)) {
            if (isset($_POST['btn_addSanpham'])) {
                $this->sanphamModel->insertSanpham($tensp, $gia, $img, $mota, $soluong, $idlh);
                header("Location: http://localhost/duan1_Nhom12_WD18202/admin/admin_sanpham/showSp");
                move_uploaded_file($file['tmp_name'], "./public/img/" . $img);
                exit();
            }
        }

        if (!empty($errors)) {
            $this->view_admin("admin_sanpham", [
                'page' => 'add_sanpham',
                'errors' => $errors,
                'users' => $users,
                'loaiHang' => $loaiHang
            ]);
        }
    }

    public function editSP_Theme($id)
    {
        $loaiHang = $this->sanphamModel->selectAll_loaiHang();
        if (!isset($_SESSION['id'])) {
            header("location: http://localhost/duan1_Nhom12_WD18202/admin/admin_login");
        } else {
            $users = $this->adminUser_Model->selectUserById($_SESSION['id']);
        }
        $sp = $this->sanphamModel->getSanphamByID($id);
        $this->view_admin("admin_sanPham", [
            'page' => 'edit_sanpham',
            'sp' => $sp,
            'id' => $id,
            'users' => $users,
            'loaiHang' => $loaiHang
        ]);
    }

    public function editSP_Feature($id)
    {
        $loaiHang = $this->sanphamModel->selectAll_loaiHang();
        if (!isset($_SESSION['id'])) {
            header("location: http://localhost/duan1_Nhom12_WD18202/admin/admin_login");
        } else {
            $users = $this->adminUser_Model->selectUserById($_SESSION['id']);
        }

        $sp = $this->sanphamModel->getSanphamByID($id);
        $tensp = $_POST['tensp'];
        $gia = $_POST['gia'];
        $mota = $_POST['mota'];
        $soluong = $_POST['soluong'];
        $id = $_POST['id'];
        $idlh = $_POST['idlh'];
        $errors = array();

        $file = $_FILES['anh'];
        $images = $_POST['anh'];

        if (empty($tensp)) {
            $errors['tensp'] = "Must fill the name product";
        }
        if ($gia <= 0 && (empty($gia))) {
            $errors['gia'] = "Must fill the price";
        }
        if ($soluong <= 0 && (empty($soluong))) {
            $errors['soluong'] = "Must fill the quantity";
        }

        if ($file['size'] > 0) {
            $img = ['jpg', 'png', 'gif'];
            $images = $file['name'];
            $ext = pathinfo($images, PATHINFO_EXTENSION);
            if (!in_array($ext, $img)) {
                $errors['anh'] = "This is not a img file";
                $this->view_admin("admin_sanPham", [
                    'page' => 'edit_sanpham',
                    'sp' => $sp,
                    'id' => $id,
                    'errors' => $errors,
                    'users' => $users,
                    'loaiHang' => $loaiHang
                ]);
            }
        }

        if (isset($_POST['btn_editSanpham'])) {
            if ((!empty($tensp)) && (!empty($gia)) && (!empty($soluong))) {
                $this->sanphamModel->updateSanpham($id, $tensp, $gia, $images, $mota, $soluong, $idlh);
                move_uploaded_file($file['tmp_name'], "./public/img/" . $images);
                header("Location: http://localhost/duan1_Nhom12_WD18202/admin/admin_sanpham/Theme");
                exit();
            }
            if (!empty($errors)) {
                $this->view_admin("admin_sanPham", [
                    'page' => 'edit_sanpham',
                    'sp' => $sp,
                    'id' => $id,
                    'errors' => $errors,
                    'users' => $users,
                    'loaiHang' => $loaiHang
                ]);
            }
        }
    }

    public function delSP_byCheckBox()
    {
        if (isset($_POST['btn_delByCheckBox'])) {
            if (isset($_POST['ids']) && is_array($_POST['ids'])) {
                $del_ids = $_POST['ids'];
                if (!empty($del_ids)) {
                    $this->sanphamModel->deleteSanpham(...$del_ids);
                    header("Location: http://localhost/duan1_Nhom12_WD18202/admin/admin_sanpham/showSp");
                    exit();
                }
            } else {
                header("Location: http://localhost/duan1_Nhom12_WD18202/admin/admin_sanpham/showSp");
            }
        }
    }

    public function delSP_byId($id)
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->sanphamModel->getSanphamByID($id);
        }

        $this->sanphamModel->deleteSanpham($id);
        header("Location: http://localhost/duan1_Nhom12_WD18202/admin/admin_sanpham/showSp");
        exit();
    }
}
