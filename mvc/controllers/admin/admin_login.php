<?php
class admin_login extends Controller
{
    public $admin_login;
    public function __construct()
    {
        $this->admin_login = $this->admin_Model("adminUser_Model");
    }

    public function Theme()
    {
        $this->view_Admin("admin_login", [
            'page' => 'login'
        ]);
    }

    public function loginFeature()
    {
        if (isset($_POST['btn_login'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $errors = array();
            $checkLoggedIn = false;

            if (empty($email)) {
                $errors['email'] = "Must fill the email";
            }
            if (empty($password)) {
                $errors['password'] = "Must fill the password";
            }

            if (empty($errors)) {
                if (!empty($email) && !empty($password)) {
                    $users = $this->admin_login->selectUserByEmail($email);
                    if (!empty($users)) {
                        if (password_verify($password, $users['password'])) {
                            $checkLoggedIn = true;
                            if ($checkLoggedIn == true) {
                                $_SESSION['id'] = $users['id'];
                                $role = $this->admin_login->selectUserById($_SESSION['id']);
                                if($role['vaitro'] == 1) {
                                    header("Location: http://localhost/duan1_Nhom12_WD18202/admin/");
                                } elseif($role['vaitro'] == 0) {
                                    header("Location: http://localhost/duan1_Nhom12_WD18202/khachhang/");
                                }
                            }
                        } else {
                            $errors['user'] = "Email or password is incorrect";
                            $this->view_Admin("admin_login", [
                                'page' => 'login',
                                'errors' => $errors
                            ]);
                        }
                    } else {
                        $errors['user'] = "Email or password is incorrect";
                        $this->view_Admin("admin_login", [
                            'page' => 'login',
                            'errors' => $errors
                        ]);
                    }
                }
            } else {
                $this->view_Admin("admin_login", [
                    'page' => 'login',
                    'errors' => $errors
                ]);
            }
        }
    }

    public function logOutFeature()
    {
        session_unset();
        header("location: http://localhost/duan1_Nhom12_WD18202/admin/admin_login");
        exit();
    }
}
