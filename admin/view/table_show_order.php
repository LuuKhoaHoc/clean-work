<?php

class table_show_order
{
    private static function table_header(string $header_name, int $id, string $lable)
    {
        ?>
        <th class="sorting w-100" tabindex="0" aria-controls="example<?= $id ?>" rowspan="1" colspan="1"
            aria-label="<?= $lable ?>>"><?= $header_name ?>
        </th>
        <?php
    }

    public static function show_table_in_card(string $table_name, int $state_id, string $action = null): void
    {
        $id = 'example' . $state_id;
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
                <table id="<?= $id ?>" class="table table-bordered table-hover dataTable dtr-inline"
                       aria-describedby="<?= $id ?>_info">
                    <caption style="font-size: larger; font-weight: bold; line-height: 36px;">Table show order
                    </caption>
                    <thead>
                    <tr>
                        <?php
                        self::table_header('ID', $state_id, 'Rendering engine: activate to sort column ascending');

                        self::table_header('Time', $state_id, 'Browser: activate to sort column ascending');

                        self::table_header('Name', $state_id, 'Platform(s): activate to sort column ascending');

                        self::table_header('Email', $state_id, 'Engine version: activate to sort column ascending');

                        self::table_header('Phone', $state_id, 'CSS grade: activate to sort column ascending');

                        self::table_header('Services', $state_id, 'CSS grade: activate to sort column ascending');

                        self::table_header('Price', $state_id, 'CSS grade: activate to sort column ascending');

                        self::table_header('Address', $state_id, 'CSS grade: activate to sort column ascending');

                        self::table_header('State', $state_id, 'CSS grade: activate to sort column ascending');

                        self::table_header('Action', $state_id, 'CSS grade: activate to sort column ascending');
                        ?>
                    </tr>
                    </thead>
                    <?php
                    require_once("admin/model/Order_Model.php");
                    foreach (Order_Model::show_order($state_id) as $order) { ?>
                        <tr>
                            <?php foreach ($order as $row) { ?>
                                <td><?= $row ?></td>
                            <?php } ?>
                            <td class="btn-group">
                                <form action="" method="post">
                                    <?php if ($action) { ?>
                                        <button class="rounded-lg btn-success w-100" type="submit" name="action"
                                                value="<?= $state_id - 1 ?>">
                                            <?= $action ?>
                                        </button>
                                    <?php } ?>
                                    <button class="rounded-lg btn-danger w-100" type="submit" name="action" value="0">
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

    public static function show_pages_table(string $table_name, string $pages, string $action = null): void
    {
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
                <table id="2" class="table table-bordered table-hover dataTable dtr-inline"
                       aria-describedby="2_info">
                    <caption style="font-size: larger; font-weight: bold; line-height: 36px;">Table show order
                    </caption>
                    <thead>
                    <tr>
                        <?php
                        self::table_header('ID', 2, 'Rendering engine: activate to sort column ascending');

                        self::table_header('Pages', 2, 'Browser: activate to sort column ascending');

                        self::table_header('Action', 2, 'CSS grade: activate to sort column ascending');
                        ?>
                    </tr>
                    </thead>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <?php
    }
}