<aside style="position: fixed " class=" main-sidebar sidebar-dark-primary elevation-4 ">
    <!-- Brand Logo -->
    <a href="index.php?c=Customer_Display_Content_Controller&a=showHomeAction" class="brand-link">
        <img src="public/images/bubbles.png" alt="Clean Work Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text text-white text-uppercase">Clean Work</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex flex-column align-items-center justify-content-center">
            <div class="user-image">
                <img  src="public/dist/img/user_blank.png"
                     class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info text-center">
                <a href="" class="d-block"><?= $_SESSION['customer_info']['name'] ?></a>
                <a href="" class="d-block"><?= $_SESSION['customer_info']['email'] ?></a>
                <a href="index.php?c=Customer_Management_Controller&a=superAdminLogoutAction" class="d-block text-center text-danger">Đăng xuất</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column"
                data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="index.php?c=Superadmin_Display_Content_Controller&a=showDashboard" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?c=Superadmin_Display_Content_Controller&a=showOrders" class="nav-link">
                        <i class="nav-icon fas fa-clipboard-check"></i>
                        <p>
                             Orders
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>
                            View Report
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-tie"></i>
                        <p>
                            Employees
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?c=Superadmin_Display_Content_Controller&a=showEmp" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?c=Superadmin_Display_Content_Controller&a=showAddEmp" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Employees</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="index.php?c=Superadmin_Display_Content_Controller&a=showCustomer" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Customer
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-scroll"></i>
                        <p>
                            Pages
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <?php
                        require_once "admin/model/Content_Model.php";
                        $model = new Content_Model();
                        $pages = $model->getPageList();
                        foreach ($pages as $page) { ?>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p><?= $page ?></p>
                            </a>
                        </li>
                         <?php } ?>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
