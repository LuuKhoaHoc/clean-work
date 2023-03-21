<?php

class Customer_Account_Controller
{
    public function changePasswordAction()
    {
        $error = false;
        $customerId = 0;
        if (!isset($_POST['btn-change'])) {
            return;
        }

        // Nếu người dùng nhấn nút 'Đổi mật khẩu'
        $old_email = trim($_POST['inputOldPass']);
        $password = trim($_POST['inputNewPass']);
        $confirm_password = trim($_POST['inputCPass']);

        // Kiểm tra mật khẩu mới và mật khẩu xác nhận có giống nhau không
        if ($password != $confirm_password) {
            $error = true;
            $errMSG = "Mật khẩu mới và mật khẩu xác nhận không khớp";
        }

        $password = password_hash($password, PASSWORD_DEFAULT);

        // Nếu không có lỗi, cập nhật mật khẩu mới vào DB
        if ($error) {
            return;
        }
        $model = new Customer_Model();
        $result = $model->updatePassword($customerId, $password);

        // Nếu đổi thành công hiển thị thông báo
        if ($result) {
            $errTyp = "success";
            $errMSG = "Password changed successfully";
        } else {
            $errTyp = "danger";
            $errMSG = "An error occurred. Please try again later";
        }
        return array($errTyp, $errMSG);

    }
    public function loginAction()
    {
        require "site/model/Customer_Model.php";
        require "admin/model/Customer_Management_Model.php";

        $model = new Customer_Model();
        $model_admin = new CustomerManagement_Model();

        $result = $model->checkUserFromDB($_POST['email'], $_POST['password']);

        if (is_null($result)) {
            require('site/view/Guest_View.php');
            global $errMsg;
            $errMsg = "Wrong email or password. Please try again!";
            $view = new Guest_View();
            $view->LoginView();
        } else if ($result == 0) {
            //add section
            ob_start();
            session_start();
            $session = $_SESSION['customer_info'] = $model->getInfoFromCustomer($_POST['email']);
            require('site/view/Customer_View.php');
            $view = new Customer_View();
            $view->LogedInHomeView($session);
        } else if ($result == 1) {
            ob_start();
            session_start();
            $session = $_SESSION['customer_info'] = $model_admin->getAdminInfoFromCustomer($_POST['email'],1);
            require('admin/view/Admin_View.php');
            $view = new Admin_View();
            $view->OrderView($session);
        } else if ($result == 2) {
            ob_start();
            session_start();
            $session = $_SESSION['customer_info'] = $model_admin->getAdminInfoFromCustomer($_POST['email'],2);
            require('admin/view/Superadmin_View.php');
            $view = new Superadmin_View();
            $view->StatisticView($session);
        }
    }
    public function logoutAction()
    {
        session_start();
        session_destroy();
        header("location: index.php");
        exit();
    }
}