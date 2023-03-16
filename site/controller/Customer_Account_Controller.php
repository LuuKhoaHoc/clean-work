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
            $errMSG = "Mật khẩu đã được đổi thành công";
        } else {
            $errTyp = "danger";
            $errMSG = "Đã xảy ra lỗi. Vui lòng thử lại sau";
        }
        return array($errTyp, $errMSG);

    }
}