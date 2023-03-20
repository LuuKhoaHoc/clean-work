<?php

class Admin_View {
    public function OrderView($adminInfo) {
        require('admin/view/public_admin/admin.php');
    }
    public function ProfileView($adminInfo) {
        require('admin/view/public_admin');
    }
}