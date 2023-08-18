<?php
    class admin_bill extends Controller {
        public $admin_billDB;
        public $adminUser_Model;
        public function __construct(){
            $this->admin_billDB = $this->admin_Model("adminBill_Model");
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
                $bill_list = $this->admin_billDB->searchingBillFeature($key);
            } else {
                $bill_list = $this->admin_billDB->selectBillByKhachHang();
            }
            
            $this->view_Admin("admin_Bill", [
                'page' => 'bill_page',
                'bill_list' => $bill_list,
                'users' => $users
            ]);
        }

        public function updateStatusBill(){
            if(!isset($_SESSION['id'])){
                header("location: http://localhost/duan1_Nhom12_WD18202/admin/admin_login");
            } else {
                $users = $this->adminUser_Model->selectUserById($_SESSION['id']);
            }

            if(isset($_GET['id'])){
                $id = $_GET['id'];
            }
            $status_byId = $this->admin_billDB->selectBillById($id);
            $status_list = $this->admin_billDB->seletAllstatusBill();
            
            $this->view_Admin("admin_Bill", [
                'page' => 'update_bill',
                'status_byId' => $status_byId,
                'status_list' => $status_list,
                'users' => $users
            ]);
        }

        public function updateBillFeature(){
            if(isset($_POST['btn_billUpdate'])){
                $selected_status = $_POST['status'];
                $id_bill = $_POST['id_bill'];
                $this->admin_billDB->updateBillById($id_bill, $selected_status);
                $msg_billUpdate = "Update success";
                $url = "http://localhost/duan1_Nhom12_WD18202/admin/admin_Bill?msg_billUpdate=". urlencode($msg_billUpdate);
                header("location: $url");
                exit();
            } else {
                echo "update failed";
            }
        }
    }
?>