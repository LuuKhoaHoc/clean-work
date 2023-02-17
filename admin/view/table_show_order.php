<?php

class card_of_table_show_order
{
    function show(string $table_name, int $state_id, string $action = null)
    {
        $id = 'example'.$state_id;
        ?>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?= $table_name ?></h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>

                </div>
            </div>
            <div class="card-body">
                <table id="<?=$id?>" class="table table-bordered table-hover dataTable dtr-inline"
                       aria-describedby="<?=$id?>_info">
                    <caption style="font-size: larger; font-weight: bold; line-height: 36px;">Table show order
                    </caption>
                    <thead>
                    <tr>
                        <th class="sorting" tabindex="0" aria-controls="<?=$id?>" rowspan="1" colspan="1"
                            aria-label="Rendering engine: activate to sort column ascending">ID
                        </th>
                        <th class="sorting sorting_desc" tabindex="0" aria-controls="<?=$id?>" rowspan="1"
                            colspan="1" aria-label="Browser: activate to sort column ascending"
                            aria-sort="descending">Time
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="<?=$id?>" rowspan="1" colspan="1"
                            aria-label="Platform(s): activate to sort column ascending">Name
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="<?=$id?>" rowspan="1" colspan="1"
                            aria-label="Engine version: activate to sort column ascending">Email
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="<?=$id?>" rowspan="1" colspan="1"
                            aria-label="CSS grade: activate to sort column ascending">Phone
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="<?=$id?>" rowspan="1" colspan="1"
                            aria-label="CSS grade: activate to sort column ascending">Service
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="<?=$id?>" rowspan="1" colspan="1"
                            aria-label="CSS grade: activate to sort column ascending">Price
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="<?=$id?>" rowspan="1" colspan="1"
                            aria-label="CSS grade: activate to sort column ascending">Address
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="<?=$id?>" rowspan="1" colspan="1"
                            aria-label="CSS grade: activate to sort column ascending">State
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="<?=$id?>" rowspan="1" colspan="1"
                            aria-label="CSS grade: activate to sort column ascending">Action
                        </th>
                    </tr>
                    </thead>
                    <?php
                    $orders = admin_Model::show_order($state_id);
                    foreach ($orders as $order) { ?>
                        <tr>
                            <?php foreach ($order as $row) { ?>
                                <td><?= $row ?></td>
                            <?php } ?>
                            <td class="btn-group">
                                <form action="" method="post">
                                    <?php if($action) {?>
                                    <button class="rounded-lg btn-success" type="submit" name="action" value="<?=$state_id-1?>">
                                        <?=$action?>
                                    </button>
                                    <?php } ?>
                                    <button class="rounded-lg btn-danger" type="submit" name="action" value="0">
                                        Disproved
                                    </button>

                                    <input type="hidden" name="order-id" value="<?= $order[0] ?>">
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <?php
    }
}