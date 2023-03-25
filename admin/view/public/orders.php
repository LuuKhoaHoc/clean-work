
<div class="content-wrapper" style="height: auto;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6"><h1 class="">Order</h1></div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a
                                    href="index.php?c=Customer_Display_Content_Controller&a=showHomeAction">Home</a>
                        </li>
                        <li class="breadcrumb-item active">SuperAdmin Page</li>
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

        table_show_order::show_table_in_card('Verifying Table', 2);

        table_show_order::show_table_in_card('Verified Table', 3);

        table_show_order::show_table_in_card('On The Way Table', 4);

        table_show_order::show_table_in_card('In Progress Table', 5);

        table_show_order::show_table_in_card('Finished Table', 6);
        ?>

    </section>
    <!-- /.content -->
</div>