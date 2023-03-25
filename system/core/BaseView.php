<?php

class BaseView {
    public function render($contentView, $data = []) {
        include "admin/view/public/super_admin_header.php";
        include "admin/view/public/super_admin_nav.php";
        include "admin/view/public/super_admin_aside.php";
        include $contentView;
        include "admin/view/public/super_admin_main-footer.php";
        include "admin/view/public/super_admin_footer.php";
    }
}