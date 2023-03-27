<?php
require_once "site/model/Customer_Model.php";
require_once "admin/model/Customer_Management_Model.php";
require_once "site/view/Customer_View.php";
require_once "system/core/Controller.php";
class Customer_Account_Controller
{
    public function changeInformation()
    {
        session_start();
        $model = new Customer_Model();
        $model_admin =  new Customer_Management_Model();
        $controller = new Controller();
        $session = $_SESSION['customer_info'];
        $model->updateInfo($session['id'],$_POST['name'],$_POST['email'],$_POST['phone']);
        $customerInfo = $controller->getCustomerInfo();
        session_reset();
        $view = new Customer_View();
        $view->ProfileView($customerInfo);

    }

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
        $model = new Customer_Model();
        $model_admin = new Customer_Management_Model();

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
            $view = new Customer_View();
            $view->LogedInHomeView($session);
        } else if ($result == 1) {
            ob_start();
            session_start();
            $session = $_SESSION['customer_info'] = $model_admin->getAdminInfoFromCustomer($_POST['email'], 1);
            $view = new Customer_View();
            $view->LogedInHomeView($session);
//            require('admin/view/Admin_View.php');
//            $view = new Admin_View();
//            $view->OrderView($session);
        } else if ($result == 2) {
            ob_start();
            session_start();
            $session = $_SESSION['customer_info'] = $model_admin->getAdminInfoFromCustomer($_POST['email'], 2);
            $view = new Customer_View();
            $view->LogedInHomeView($session);
//            require('admin/view/Superadmin_View.php');
//            $view = new Superadmin_View();
//            $view->StatisticView($session);
        }
    }

    public function checkInput($data)
    {
        return htmlspecialchars(stripslashes(trim($data)));
    }

    public function signUpAction()
    {
        $name = self::checkInput($_POST['name']);
        $email =  self::checkInput($_POST['email']);
        $password = self::checkInput($_POST['password']);
        $password_retype = self::checkInput($_POST['password_retype']);
        $model = new Customer_Model();
        $model->signUpAccount("$name", "$email", "$password", "$password_retype");
        $view =  new Guest_View();
        $view->LoginView();
    }
    public function logoutAction()
    {
        session_start();
        unset($_SESSION['customer_info']);
        session_destroy();
        header("location: index.php");
        exit();
    }
}