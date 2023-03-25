<?php /** @var $data */ ?>
<div class="content-wrapper" style="height: auto;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Employees List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a
                                    href="index.php?c=Customer_Display_Content_Controller&a=showHomeAction">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Employees</li>
                        <li class="breadcrumb-item active">List</li>
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
                            <div class="row d-flex align-items-center">
                                <div class="col-sm-12 col-md-6">
                                    <select class="form-control " name="position" id="position">
                                        <option value="0">--None--</option>
                                        <option value="1">Manager</option>
                                        <option value="2">Supervisor</option>
                                        <option value="3">Director</option>
                                    </select>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="d-flex" style="gap: 10px">
                                        <button class="btn-success rounded">Promote</button>
                                        <button class="btn-warning rounded">Demote</button>
                                        <button class="btn-danger rounded">Dismissed</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">

                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example1"
                                               class="table table-bordered table-striped dataTable dtr-inline"
                                               aria-describedby="example1_info">
                                            <thead>
                                            <tr>
                                                <th class="sorting sorting_asc" tabindex="0"
                                                    aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-sort="ascending"
                                                    aria-label="ID: activate to sort column descending">ID
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example1"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Name: activate to sort column ascending">Name
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example1"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Phone: activate to sort column ascending">Phone
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example1"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Position: activate to sort column ascending">
                                                    Position
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example1"
                                                    rowspan="1" colspan="1"
                                                    aria-label="">Action
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            <?php
                                            foreach ($data as $emp) {
                                                ?>
                                                <tr>
                                                    <?php
                                                    foreach ($emp as $e) {
                                                        ?>
                                                        <td><?= $e ?></td>
                                                    <?php } ?>
                                                    <td class="d-flex justify-content-between align-items-center">
                                                        <label>
                                                            <input type="checkbox" name="checkbox"
                                                                   value="1" <?= $emp['type'] == 'Director' ? 'disabled' : '' ?>>
                                                        </label>
                                                        <label for="">
                                                            <a class="btn btn-secondary"
                                                               href="
                                                               <?php $id = $emp['id'];
                                                               echo "index.php?c=Superadmin_Display_Content_Controller&a=showEditEmp&id=$id"
                                                               ?>"
                                                               type="button">Edit</a>
                                                        </label>
                                                    </td>
                                                </tr>
                                            <?php } ?>


                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th rowspan="1" colspan="1">ID</th>
                                                <th rowspan="1" colspan="1">Name</th>
                                                <th rowspan="1" colspan="1">Phone</th>
                                                <th rowspan="1" colspan="1">Position</th>
                                                <th rowspan="1" colspan="1">Action</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
