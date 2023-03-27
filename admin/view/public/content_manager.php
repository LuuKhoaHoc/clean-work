<?php /** @var $data */ ?>
<div class="content-wrapper" style="height: auto;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Content Manager</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a
                                    href="index.php?c=Customer_Display_Content_Controller&a=showHomeAction">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Page</li>
                        <li class="breadcrumb-item active"><?= $data[0]['page'] ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                            <div class="card-header">
                                <div class=" d-flex float-right justify-content-between align-items-center ">
                                        <a class=" btn btn-info "
                                           href="
                                           <?php $p = $data[0]['page'];
                                           echo "index.php?c=Superadmin_Display_Content_Controller&a=showContentEdit&p=$p"
                                           ?>"
                                           type="button">Edit</a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="example1"
                                                   class="table table-bordered table-striped dataTable dtr-inline"
                                                   aria-describedby="example1">
                                                <thead>
                                                <tr>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Name: activate to sort column ascending">Title
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Phone: activate to sort column ascending">Content
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Position: activate to sort column ascending">
                                                        Page
                                                    </th>

                                                </tr>
                                                </thead>
                                                <tbody>

                                                <?php
                                                foreach ($data as $page) {
                                                    ?>
                                                    <tr>
                                                        <?php
                                                        foreach ($page as $e) {
                                                            ?>
                                                            <td><?= $e ?></td>
                                                        <?php } ?>
                                                    </tr>
                                                <?php } ?>
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th rowspan="1" colspan="1">Title</th>
                                                    <th rowspan="1" colspan="1">Content</th>
                                                    <th rowspan="1" colspan="1">Page</th>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
