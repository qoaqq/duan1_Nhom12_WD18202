<?php
class admin_users extends Controller
{
    public $admin_users;
    public function __construct()
    {
        $this->admin_users = $this->admin_Model("adminUser_Model");
    }

    public function Theme()
    {
        if (!isset($_SESSION['id'])) {
            header("location: http://localhost/duan1_Nhom12_WD18202/admin/admin_login");
        } else {
            $users = $this->admin_users->selectUserById($_SESSION['id']);
        }

        if (isset($_GET['search']) && !empty($_GET['search'])) {
            $key = $_GET['search'];
            $tableUsers = $this->admin_users->searchingFeature($key);
        } else {
            $tableUsers = $this->admin_users->selectUserByRole();
        }


        $this->view_Admin("admin_users", [
            'page' => 'users',
            'users' => $users,
            'table' => $tableUsers
        ]);
    }

    public function insertTheme()
    {
        if (!isset($_SESSION['id'])) {
            header("location: http://localhost/duan1_Nhom12_WD18202/admin/admin_login");
        } else {
            $users = $this->admin_users->selectUserById($_SESSION['id']);
        }
        $this->view_Admin("admin_users", [
            'users' => $users,
            'page' => 'insertUser'
        ]);
    }

    public function insertFeature()
    {
        if (!isset($_SESSION['id'])) {
            header("location: http://localhost/duan1_Nhom12_WD18202/admin/admin_login");
        } else {
            $users = $this->admin_users->selectUserById($_SESSION['id']);
        }

        $fullname = $_POST['fullname'];
        $phonenumber = $_POST['phonenumber'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        $post_code = $_POST['post_code'];
        $password = $_POST['password'];
        $hashPass = password_hash($password, PASSWORD_DEFAULT);
        $file = $_FILES['img'];
        $img = $file['name'];
        $errors = array();

        if (empty($fullname)) {
            $errors['fullname'] = "Vui lòng nhập tên";
        }

        if (empty($phonenumber)) {
            $errors['phonenumber'] = "Vui lòng nhập số điện thoại";
        }

        if (empty($address)) {
            $errors['address'] = "Vui lòng nhập địa chỉ";
        }

        if (empty($email)) {
            $errors['email'] = "Vui lòng nhập email";
        }

        if (empty($password)) {
            $errors['password'] = "Vui lòng nhập mật khẩu";
        }

        if ($file['size'] <= 0) {
            $errors['img'] = "Bạn cần nhập ảnh";
            $this->view_Admin("admin_users", [
                'errors' => $errors,
                'page' => 'insertUser',
                'users' => $users
            ]);
        } else {
            $image = ['jpg', 'png', 'gif'];
            $ext = pathinfo($img, PATHINFO_EXTENSION);
            if (!in_array($ext, $image)) {
                $errors['img'] = "File không phải là ảnh";
                $this->view_Admin("admin_users", [
                    'errors' => $errors,
                    'page' => 'insertUser',
                    'users' => $users
                ]);
            }
        }

        if (empty($errors)) {
            if (isset($_POST['btn_insertUser'])) {
                $this->admin_users->insertUserByRole0($fullname, $phonenumber, $address, $city, $post_code, $email, $hashPass, $img);
                move_uploaded_file($file['tmp_name'], "./public/img/" . $img);
                header("location: http://localhost/duan1_Nhom12_WD18202/admin/admin_users");
                exit();
            }
        } else {
            print_r($errors);
            $this->view_Admin("admin_users", [
                'errors' => $errors,
                'page' => 'insertUser',
                'users' => $users
            ]);
        }
    }

    public function getIdUserUpdate($id)
    {
        if (!isset($_SESSION['id'])) {
            header("location: http://localhost/duan1_Nhom12_WD18202/admin/admin_login");
        } else {
            $users = $this->admin_users->selectUserById($_SESSION['id']);
        }
        $updateTable = $this->admin_users->selectUserById($id);
        $this->view_Admin("admin_users", [
            'page' => 'updateUser',
            'users' => $users,
            'update' => $updateTable
        ]);
    }

    public function updateFeature($id)
    {
        if (!isset($_SESSION['id'])) {
            header("location: http://localhost/duan1_Nhom12_WD18202/admin/admin_login");
        } else {
            $users = $this->admin_users->selectUserById($_SESSION['id']);
        }

        $fullname = $_POST['fullname'];
        $phonenumber = $_POST['phonenumber'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        $post_code = $_POST['post_code'];
        $password = $_POST['password'];
        $hashPass = password_hash($password, PASSWORD_DEFAULT);
        $file = $_FILES['img'];
        $img = $_POST['img'];
        $errors = array();

        if (empty($fullname)) {
            $errors['fullname'] = "Vui lòng nhập tên";
        }

        if (empty($phonenumber)) {
            $errors['phonenumber'] = "Vui lòng nhập số điện thoại";
        }

        if (empty($address)) {
            $errors['address'] = "Vui lòng nhập địa chỉ";
        }

        if (empty($email)) {
            $errors['email'] = "Vui lòng nhập email";
        }

        if (empty($password)) {
            $errors['password'] = "Vui lòng nhập mật khẩu";
        }

        if ($file['size'] > 0) {
            $image = ['jpg', 'png', 'gif'];
            $img = $file['name'];
            $ext = pathinfo($img, PATHINFO_EXTENSION);
            if (!in_array($ext, $image)) {
                $updateTable = $this->admin_users->selectUserById($id);
                $errors['img'] = "File không phải là ảnh";
                $this->view_Admin("admin_users", [
                'page' => 'updateUser',
                'errors' => $errors,
                'update' => $updateTable,
                'users' => $users
            ]);
            }
        }

        if (empty($errors)) {
            if (isset($_POST['btn_updateUser'])) {
                $this->admin_users->updateUserByIdRole($id, $fullname, $phonenumber, $address, $email, $city, $post_code, $hashPass, $img);
                move_uploaded_file($file['tmp_name'], "./public/img/" . $img);
                header("location: http://localhost/duan1_Nhom12_WD18202/admin/admin_users");
                exit();
            }
        }

        if (!empty($errors)) {
            $updateTable = $this->admin_users->selectUserById($id);
            $this->view_Admin("admin_users", [
                'page' => 'updateUser',
                'errors' => $errors,
                'update' => $updateTable,
                'users' => $users
            ]);
        }
    }

    public function deleteFeatureById($id)
    {
        $this->admin_users->deleteUserById($id);
        header("location: http://localhost/duan1_Nhom12_WD18202/admin/admin_users");
        exit();
    }

    public function deleteFeatureByCheckBox(...$ids)
    {
        if (isset($_POST['ids']) && is_array($_POST['ids'])) {
            $ids = $_POST['ids'];
            $this->admin_users->deleteUserByCheckBox(...$ids);
            header("location: http://localhost/duan1_Nhom12_WD18202/admin/admin_users");
            exit();
        } else {
            header("location: http://localhost/duan1_Nhom12_WD18202/admin/admin_users");
        }
    }
}
