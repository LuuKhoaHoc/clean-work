<?php

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case "0":
        case "-1":
            admin_Model::disproved($_POST['order-id']);
            break;
        case "1":
            admin_Model::verifying_verified($_POST['order-id']);
            break;
        case "2":
            admin_Model::verified_ontheway($_POST['order-id']);
            break;
        case "3":
            admin_Model::ontheway_inprogress($_POST['order-id']);
            break;
        case "4":
            admin_Model::inprogress_finished($_POST['order-id']);
            break;
        case "5":
            admin_Model::finished_ended($_POST['order-id']);
            break;
        default:
    }
    header("Refresh:0");
}

?>



    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6"><h1 class="">Order</h1></div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Order</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section id="data-tables" class="content">

        <?php
        include 'admin/view/table_show_order.php';

        table_show_order::show_table_in_card('Verifying Table', 2, '');

        table_show_order::show_table_in_card('Verified Table', 3, '');

        table_show_order::show_table_in_card('On The Way Table', 4);

        table_show_order::show_table_in_card('In Progress Table', 5);

        table_show_order::show_table_in_card('Finished Table', 6, '');
        ?>

    </section>
    <!-- /.content -->


