<?php
class admin_profile extends Controller
{
    public $admin_profile;
    public function __construct()
    {
        $this->admin_profile = $this->admin_Model("adminUser_Model");
    }

    public function Theme()
    {
        if (!isset($_SESSION['id'])) {
            header("location: http://localhost/duan1_Nhom12_WD18202/admin/admin_login");
        } else {
            $users = $this->admin_profile->selectUserById($_SESSION['id']);
        }
        $this->view_Admin("admin_profile", [
            'page' => 'profile',
            'users' => $users
        ]);
    }

    public function updateAdminProfile($id)
    {
        if (!isset($_SESSION['id'])) {
            header("location: http://localhost/duan1_Nhom12_WD18202/admin/admin_login");
        } else {
            $users = $this->admin_profile->selectUserById($_SESSION['id']);
        }

        $fullname = $_POST['fullname'];
        $phonenumber = $_POST['phonenumber'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        $post_code = $_POST['post_code'];
        $file = $_FILES['img'];
        $img = $_POST['img'];
        $errors = array();

        if (empty($fullname)) {
            $errors['fullname'] = "Must fill the name";
        }

        if (empty($phonenumber)) {
            $errors['phonenumber'] = "Must fill the phonenumber";
        }

        if (empty($address)) {
            $errors['address'] = "Must fill the address";
        }

        if (empty($email)) {
            $errors['email'] = "Must fill the email";
        }

        if ($file['size'] > 0) {
            $image = ['jpg', 'png', 'gif'];
            $img = $file['name'];
            $ext = pathinfo($img, PATHINFO_EXTENSION);
            if (!in_array($ext, $image)) {
                $errors['img'] = "This is not a img file";
                $this->view_Admin("admin_profile", [
                    'page' => 'profile',
                    'users' => $users,
                    'errors' => $errors
                ]);
            }
        }

        if (empty($errors)) {
            if (isset($_POST['btn_updateAdminProfile'])) {
                $this->admin_profile->updateAdminProdfileById($id, $fullname, $phonenumber, $address, $email, $city, $post_code, $img);
                move_uploaded_file($file['tmp_name'], "./public/img/" . $img);
                header("location: http://localhost/duan1_Nhom12_WD18202/admin/admin_profile/" . $id);
                exit();
            }
        } else {
            if (!isset($_SESSION['id'])) {
                header("location: http://localhost/duan1_Nhom12_WD18202/admin/admin_login");
            } else {
                $users = $this->admin_profile->selectUserById($_SESSION['id']);
            }
            $this->view_Admin("admin_profile", [
                'page' => 'profile',
                'users' => $users,
                'errors' => $errors
            ]);
        }
    }
}
