<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="public/images/bubbles.png" alt="Clean Work Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text text-white text-uppercase">Clean Work</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center justify-content-center">
            <div class="image">
                <img src="public/dist/img/user2-160x160.jpg"
                     class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="" class="d-block">SuperAdmin@gmail.com</a>
                <a href="" class="d-block text-center text-danger">Đăng xuất</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column"
                data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="superadmin.php" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
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
                            <a href="index.php?module=user&action=index" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?module=user&action=create" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Employees</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
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
<!--                    <ul class="nav nav-treeview">-->
<!--                        --><?php
//                        $query = "
//                        SELECT * FROM
//                        ";
//                        $row = mysqli_query(\Administrator\CleanWork\system\DB::connect(), $query);
//                        $res = mysqli_fetch_all($row);
//                        foreach ($res as $page) {
//                            display($page[0]);
//                        }
//                        function display($page) {
//                        ?>
<!--                        <li class="nav-item">-->
<!--                            <a href="" class="nav-link">-->
<!--                                <i class="far fa-circle nav-icon"></i>-->
<!--                                <p>--><?php //= $page ?><!--</p>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        --><?php //} ?>
<!---->
<!--                    </ul>-->
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
