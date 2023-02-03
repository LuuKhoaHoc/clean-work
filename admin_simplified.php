<pre>
    <?php
    require 'DB.php';
    $orders = DB::show_order();
    var_dump($_POST);
    if (isset($_POST['action'])) {
        if ($_POST['action']) DB::verifying_verified($_POST['order-id']);
        else DB::disproved($_POST['order-id']);
    }

    ?>
</pre>

<h1>--ADMIN SCREEN--</h1>
<h2>Current orders</h2>
<table>
    <?php foreach ($orders as $order) { ?>
        <tr>
            <?php foreach ($order as $row) { ?>
                <td><?= $row ?></td>
            <?php } ?>
            <td class="btn-group">
                <form action="admin_simplified.php" method="post">
                    <input type="hidden" name="order-id" value="<?= $order[0] ?>">
                    <button class="rounded-lg btn-success" type="submit" name="action" value="1">Confirmed</button>
                    <button class="rounded-lg btn-danger" type="submit" name="action" value="0">Disproved</button>
                </form>
            </td>
        </tr>
    <?php } ?>
</table>
<h2>History</h2>
<h2>Statistic</h2>
