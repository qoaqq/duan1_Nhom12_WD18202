<?php
    class admin_bill extends Controller {
        public $admin_bilDB;
        public $adminUser_Model;
        public function __construct(){
            $this->admin_bilDB = $this->admin_Model("adminBill_Model");
            $this->adminUser_Model = $this->admin_Model("adminUser_Model");
        }
        
        public function Theme(){
            if(!isset($_SESSION['id'])){
                header("location: http://localhost/duan1_Nhom12_WD18202/admin/admin_login");
            } else {
                $users = $this->adminUser_Model->selectUserById($_SESSION['id']);
            }

            if (isset($_GET['search']) && !empty($_GET['search'])) {
                $key = $_GET['search'];
                $bill_list = $this->admin_bilDB->searchingBillFeature($key);
            } else {
                $bill_list = $this->admin_bilDB->selectBillByKhachHang();
            }
            
            $this->view_Admin("admin_Bill", [
                'page' => 'bill_page',
                'bill_list' => $bill_list,
                'users' => $users
            ]);
        }

        public function updateStatusBill($id){
            if(!isset($_SESSION['id'])){
                header("location: http://localhost/duan1_Nhom12_WD18202/admin/admin_login");
            } else {
                $users = $this->adminUser_Model->selectUserById($_SESSION['id']);
            }

            $status_list = $this->admin_bilDB->selectStatusBillById($id);
            $bill_list = $this->admin_bilDB->selectAllBill();

            $this->view_Admin("admin_Bill", [
                'page' => 'update_bill',
                'status_list' => $status_list,
                'bill_list' => $bill_list,
                'users' => $users
            ]);
        }

        public function updateBillFeature($id){
            if(isset($_POST['btn_billUpdate'])){
                $selected_status = $_POST['status'];
                $this->admin_bilDB->updateBillById($id, $selected_status);
                header("location: http://localhost/duan1_Nhom12_WD18202/admin/admin_Bill");
                // echo "<pre>";
                // print_r($_POST);
                // echo "</pre>";
                exit();
            } else {
                echo "update failed";
            }
        }
    }
?>