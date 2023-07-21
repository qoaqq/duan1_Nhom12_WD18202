<?php 
    class admin_sanpham extends Controller{
        
        public $sanphamModel;
        public function __construct(){
            $this->sanphamModel = $this->admin_Model("sanphamModel");
            $this->adminUser_Model = $this->admin_Model("adminUser_Model");
        }

        public function Theme(){
            $listsp = $this->sanphamModel = $this->admin_Model("sanphamModel");
            $this->view_admin("admin_sanpham", [
                'page'=>'sanpham_page',
                'listsp' => $listsp
            ]);
        }

        public function addSP_Theme(){
            $users = $this->adminUser_Model->selectUserById($_SESSION['id']);
            $this->view_admin("admin_sanpham",[
                'page' => "add_sanpham",
                'users' => $users
            ]);
        }

        public function showSp(){
            $users = $this->adminUser_Model->selectUserById($_SESSION['id']);
            $listsp = $this->sanphamModel->listSanpham();
            $this->view_admin("admin_sanpham", [
                'page' => 'sanpham_page',
                'listsp' => $listsp,
                'users' => $users
            ]);
        }

        public function addSP_Feature(){
            $tensp = $_POST['tensp'];
            $gia = $_POST['gia'];
            $mota = $_POST['mota'];
            $soluong = $_POST['soluong'];
            $file = $_FILES['anh'];  
            $img = $file['name'];
            $errors = array();

            if(empty($tensp)){
                $errors['tensp'] = "Vui lòng nhập tên sản phẩm";
            }
            if($gia <= 0 && (empty($gia))){
                $errors['gia'] = "Vui lòng nhập giá sản phẩm";
            }
            if(empty($mota)){
                $errors['mota'] = "Vui lòng nhập mô tả";
            }
            if($soluong <= 0 && (empty($soluong))){ 
                $errors['soluong'] = "Vui lòng nhập số lượng";
            }

            if ($file['size'] <= 0) {
                $errors['anh'] = "Bạn cần nhập ảnh";
            } else {
                $image = ['jpg', 'png', 'gif'];
                $ext = pathinfo($img, PATHINFO_EXTENSION);
                if (!in_array($ext, $image)) {
                    $errors['anh'] = "File không phải là ảnh";
                }
            }
            
            if(empty($errors)){
                if(isset($_POST['btn_addSanpham'])){
                    $this->sanphamModel->insertSanpham($tensp,$gia,$img,$mota,$soluong);
                    header("Location: http://localhost/duan1_Nhom12_WD18202/admin/admin_sanpham/showSp");
                    move_uploaded_file($file['tmp_name'], "./public/images/".$img);
                    exit();
                }
            }

            if(!empty($errors)){
                $this->view_admin("admin_sanpham", [
                    'page' => 'add_sanpham',
                    'errors' => $errors
                ]);
            }
        }

        public function editSP_Theme($id){ 
            $users = $this->adminUser_Model->selectUserById($_SESSION['id']);
            $sp = $this->sanphamModel->getSanphamByID($id); 
            $this->view_admin("admin_sanPham", [
                'page' => 'edit_sanpham',
                'sp' => $sp,
                'id' => $id,
                'users' => $users
            ]);
        }

        public function editSP_Feature($id){
            $sp = $this->sanphamModel->getSanphamByID($id);
            $tensp = $_POST['tensp'];
            $gia = $_POST['gia'];
            $mota = $_POST['mota'];
            $soluong = $_POST['soluong'];
            $id = $_POST['id'];
         
            $file = $_FILES['anh'];
            $images = $_POST['anh'];
           
            if(isset($_POST['btn_editSanpham'])){

               
                $errors = array();
                
                if(empty($tensp)){
                    $errors['tensp'] = "Vui lòng nhập tên sản phẩm";
                }
                if($gia <= 0 && (empty($gia))){
                    $errors['gia'] = "Vui lòng nhập giá sản phẩm";
                }
                if($soluong <= 0 && (empty($soluong))){ 
                    $errors['soluong'] = "Vui lòng nhập số lượng";
                }

                if ($file['size'] > 0) {
                    $img = ['jpg', 'png', 'gif'];
                    //lấy tên ảnh mới
                    $images = $file['name'];
                    //Lấy phần mở rộng của file
                    $ext = pathinfo($images, PATHINFO_EXTENSION);
                    //Kiểm tra xem $ext có trong $img không
                    if (!in_array($ext, $img)) {
                        $errors['anh'] = "File không phải là ảnh";
                    }
                }
                
                if((!empty($tensp)) && (!empty($gia)) && (!empty($mota)) && (!empty($soluong))){
                    $this->sanphamModel->updateSanpham($id, $tensp, $gia, $images, $mota, $soluong);
                    move_uploaded_file($file['tmp_name'], "./public/im/".$images);
                    header("Location: http://localhost/duan1_Nhom12_WD18202/admin/admin_sanpham/showSp");
                    exit();
                }
                
              
                if(!empty($errors)){
                    $this->view_admin("admin_sanPham", [
                        'page' => 'edit_sanpham',
                        'sp' => $sp,
                        'id' => $id,
                        'errors' => $errors
                    ]);
                }
            }
            
        }
        
        public function delSP_byCheckBox(){
            if(isset($_POST['btn_delByCheckBox'])) {
                if(isset($_POST['ids']) && is_array($_POST['ids'])){
                    $del_ids = $_POST['ids'];
                
                    if(!empty($del_ids)) {
                        
                        $this->sanphamModel->deleteSanpham(...$del_ids);
                        header("Location: http://localhost/duan1_Nhom12_WD18202/admin/admin_sanpham/showSp");
                        exit();
                    }
                } else {
                    header("Location: http://localhost/duan1_Nhom12_WD18202/admin/admin_sanpham/showSp");
                }
            }
            
            die;
        }

        public function delSP_byId(){
            $id = null;
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $this->sanphamModel->getSanphamByID((int)$id);
            }

            $this->sanphamModel->deleteSanpham((int)$id);
            header("Location: http://localhost/duan1_Nhom12_WD18202/admin/admin_sanpham/showSp");
            exit();
        }
    }
