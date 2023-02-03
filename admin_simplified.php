<pre>
    <?php
    require 'DB.php';
    $orders = DB::show_order();
    var_dump($_POST);
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case "0":
            case "-1":
                DB::disproved($_POST['order-id']);
                break;
            case "1":
                DB::verifying_verified($_POST['order-id']);
                break;
            case "2":
                DB::verified_ongoing($_POST['order-id']);
                break;
            default:
        }
        header("Refresh:0");
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
                <form action="" method="post">
                    <?php
                    echo match ($order[8]) {
                        "verifying" => '
                            <button class="rounded-lg btn-success" type="submit" name="action" value="1">Confirmed</button>
                            <button class="rounded-lg btn-danger" type="submit" name="action" value="0">Disproved</button>
                            ',
                        "verified" => '
                            <button class="rounded-lg btn-danger" type="submit" name="action" value="2">Dispatch</button>
                            ',
                        default => '
                            <button class="rounded-lg btn-danger" type="submit" name="action" value="-1">Disproved</button>
                            ',
                    };
                    ?>
                    <input type="hidden" name="order-id" value="<?= $order[0] ?>">
                </form>
            </td>
        </tr>
    <?php } ?>
</table>
<h2>History</h2>
<h2>Statistic</h2>
