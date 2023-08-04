<?php
class admin_danhmuc extends Controller
{

    public $danhmucModel;

    public $adminUser_Model;

    public function __construct()
    {
        $this->danhmucModel = $this->admin_Model("danhmucModel");
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
            $listdm = $this->danhmucModel->searchingDanhmucFeature($key);
        } else {
            $listdm = $this->danhmucModel->listDanhmuc();
        }
        
        $this->view_admin("admin_danhMuc", [
            'page' => 'danhmuc_page',
            'listdm' => $listdm,
            'users' => $users
        ]);
    }

    public function addDM_Theme()
    {
        $gioitinh_loaiHang = $this->danhmucModel->selectAll_gioitinhLoaiHang();
        if (!isset($_SESSION['id'])) {
            header("location: http://localhost/duan1_Nhom12_WD18202/admin/admin_login");
        } else {
            $users = $this->adminUser_Model->selectUserById($_SESSION['id']);
        }

        $this->view_admin("admin_danhMuc", [
            'page' => 'add_danhmuc',
            'users' => $users,
            'gioitinh_loaiHang' => $gioitinh_loaiHang
        ]);
    }

    public function addDM_Feature()
    {
        $gioitinh_loaiHang = $this->danhmucModel->selectAll_gioitinhLoaiHang();
        if (!isset($_SESSION['id'])) {
            header("location: http://localhost/duan1_Nhom12_WD18202/admin/admin_login");
        } else {
            $users = $this->adminUser_Model->selectUserById($_SESSION['id']);
        }

        $tendm = $_POST['tendm'];
        $idlh = $_POST['idlh'];
        $errors = array();

        if (empty($tendm)) {
            $errors['tendm'] = "Vui lòng nhập tên danh mục";
        }

        if (!empty($errors)) {
            $this->view_admin("admin_danhMuc", [
                'page' => 'add_danhmuc',
                'errors' => $errors,
                'users' => $users,
                'gioitinh_loaiHang' => $gioitinh_loaiHang
            ]);
        } else {
            if (isset($_POST['btn_addDanhmuc'])) {
                $this->danhmucModel->insertDanhmuc($tendm, $idlh);
                header("Location: http://localhost/duan1_Nhom12_WD18202/admin/admin_danhmuc/Theme");
                exit();
            }
        }
    }

    public function editDM_Feature($id)
    {
        $gioitinh_loaiHang = $this->danhmucModel->selectAll_gioitinhLoaiHang();
        if (!isset($_SESSION['id'])) {
            header("location: http://localhost/duan1_Nhom12_WD18202/admin/admin_login");
        } else {
            $users = $this->adminUser_Model->selectUserById($_SESSION['id']);
        }
        $dm = $this->danhmucModel->getDanhmucById($id);
        $this->view_admin("admin_danhMuc", [
            'page' => 'edit_danhmuc',
            'dm' => $dm,
            'id' => $id,
            'users' => $users,
            'gioitinh_loaiHang' => $gioitinh_loaiHang
        ]);
    }

    public function editDM_Theme($id)
    {
        $gioitinh_loaiHang = $this->danhmucModel->selectAll_gioitinhLoaiHang();
        if (!isset($_SESSION['id'])) {
            header("location: http://localhost/duan1_Nhom12_WD18202/admin/admin_login");
        } else {
            $users = $this->adminUser_Model->selectUserById($_SESSION['id']);
        }

        $dm = $this->danhmucModel->getDanhmucById($id);
        if (isset($_POST['btn_editDanhmuc'])) {
            $tendm = $_POST['tendm'];
            $id = $_POST['id'];
            $idlh = $_POST['idlh'];
            $errors = array();

            if (empty($tendm)) {
                $errors['tendm'] = "Vui lòng nhập tên danh mục cần sửa";
            }

            if (!empty($tendm)) {
                $this->danhmucModel->updateDanhmuc($tendm, $id, $idlh);
                header("Location: http://localhost/duan1_Nhom12_WD18202/admin/admin_danhmuc/Theme");
                exit();
            }
        }

        if (!empty($errors)) {
            $this->view_admin("admin_danhMuc", [
                'page' => 'edit_danhmuc',
                'dm' => $dm,
                'id' => $id,
                'errors' => $errors,
                'users' => $users,
                'gioitinh_loaiHang' => $gioitinh_loaiHang
            ]);
        }
    }


    public function delDM_byCheckBox()
    {
        if (isset($_POST['btn_delByCheckBox'])) {
            if (isset($_POST['ids']) && is_array($_POST['ids'])) {
                $del_ids = $_POST['ids'];
                if (!empty($del_ids)) {
                    $this->danhmucModel->deleteDanhmuc(...$del_ids);
                    header("Location: http://localhost/duan1_Nhom12_WD18202/admin/admin_danhmuc/Theme");
                    exit();
                }
            } else {
                header("Location: http://localhost/duan1_Nhom12_WD18202/admin/admin_danhmuc/Theme");
            }
        }
        die;
    }

    public function delDM_byId()
    {
        $id = null;
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->danhmucModel->getDanhmucById((int)$id);
        }

        $this->danhmucModel->deleteDanhmuc((int)$id);
        header("Location: http://localhost/duan1_Nhom12_WD18202/admin/admin_danhmuc/Theme");
        exit();
    }
}
