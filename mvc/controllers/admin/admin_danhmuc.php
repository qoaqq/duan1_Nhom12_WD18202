<?php
    class admin_danhmuc extends Controller{

        public $danhmucModel;

        public function __construct(){
            $this->danhmucModel = $this->admin_Model("danhmucModel");
        }
        
        public function Theme(){
            $this->view_admin("admin_danhMuc", [
                'page'=>'danhmuc_page'
            ]);
        }

        public function addDM_Theme(){        
            $this->view_admin("admin_danhMuc", [
                'page' => 'add_danhmuc',
            ]);
        }

        public function addDM_Feature(){
            $tendm = $_POST['tendm'];
            echo $tendm;
            $errors = array();

            if(empty($tendm)){
                $errors['tendm'] = "Vui lòng nhập tên danh mục";
            }

            if(!empty($errors)){
                $this->view_admin("admin_danhMuc", [
                    'page' => 'add_danhmuc',
                    'errors' => $errors
                ]);
            }else{
                if(isset($_POST['btn_addDanhmuc'])){
                    $this->danhmucModel->insertDanhmuc($tendm);
                    header("Location: http://localhost/duan1_Nhom12_WD18202/admin/admin_danhmuc/showDm");
                    exit();
                }
                
            }
        }

        public function editDM_Feature($id){
            $dm = $this->danhmucModel->getDanhmucById($id);
            $this->view_admin("admin_danhMuc", [
                'page' => 'edit_danhmuc',
                'dm' => $dm,
                'id' => $id,
            ]);
        }
        public function editDM_Theme($id){
            $dm = $this->danhmucModel->getDanhmucById($id);

            if(isset($_POST['btn_editDanhmuc'])){
                $tendm = $_POST['tendm'];
                $id = $_POST['id'];
                $errors = array();
                

                if(empty($tendm)){
                    $errors['tendm'] = "Vui lòng nhập tên danh mục cần sửa";
                }

                if(!empty($tendm)){
                    $this->danhmucModel->updateDanhmuc($tendm,$id);
                    header("Location: http://localhost/duan1_Nhom12_WD18202/admin/admin_danhmuc/showDm");
                    exit();
                }
               
               
            }
           

           if(!empty($errors)) {
                $this->view_admin("admin_danhMuc", [
                    'page' => 'edit_danhmuc',
                    'dm' => $dm,
                    'id' => $id,
                    'errors' => $errors
                ]);
           }
        }

        
        public function delDM_byCheckBox(){
            // $id = null;
            
            if(isset($_POST['btn_delByCheckBox'])) {
                if(isset($_POST['ids']) && is_array($_POST['ids'])){
                    $del_ids = $_POST['ids'];
                    if(!empty($del_ids)) {
                        $this->danhmucModel->deleteDanhmuc(...$del_ids);
                        header("Location: http://localhost/duan1_Nhom12_WD18202/admin/admin_danhmuc/showDm");
                        exit();
                    }
                } else {
                    header("Location: http://localhost/duan1_Nhom12_WD18202/admin/admin_danhmuc/showDm");
                }
            }
            
            die;
            
        }

        public function delDM_byId(){
            $id = null;
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $this->danhmucModel->getDanhmucById((int)$id);
            }

            $this->danhmucModel->deleteDanhmuc((int)$id);
            header("Location: http://localhost/duan1_Nhom12_WD18202/admin/admin_danhmuc/showDm");
            exit();
            
        }
        
        //http://localhost/duan1_Nhom12_WD18202/admin/admin_danhmuc/showDm

        public function showDm(){
            $listdm = $this->danhmucModel->listDanhmuc();
            $this->view_admin("admin_danhMuc", [
                'page' => 'danhmuc_page',
                'listdm' => $listdm,
            ]);
        }
    }

?>