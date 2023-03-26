<?php
foreach (Order_Model::show_order($state_id) as $order) { ?>
    <tr>
        <?php foreach ($order as $row) { ?>
            <td>
                <?= $row ?>
            </td>
        <?php } ?>
        <td class="btn-group">
            <form action="" method="post">
                <?php if ($action) { ?>
                    <button class="rounded-lg btn-success w-100" type="submit" name="action" value="<?= $state_id - 1 ?>">
                        <?= $action ?>
                    </button>
                <?php } ?>
                <?php if ($_SESSION['customer_info']['type'] == 'superadmin') { ?>
                    <button disabled class="rounded-lg btn-secondary w-100" type="submit" name="action" value="0">
                        Disproved
                    </button>
                <?php } else { ?>
                    <button class="rounded-lg btn-danger w-100" type="submit" name="action" value="0">
                        Disproved
                    </button>
                <?php } ?>
                <input type="hidden" name="order-id" value="<?= $order[0] ?>">
            </form>
        </td>
    </tr>
<?php } ?>