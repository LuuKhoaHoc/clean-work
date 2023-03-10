<pre>
    <?php
    require 'system/DB.php';

    $orders = admin_Model::show_order();
    var_dump($_POST);
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

<h3>Verifying Orders</h3>
<table>
    <?php
    $orders = admin_Model::show_order(2);
    foreach ($orders as $order) { ?>
        <tr>
            <?php foreach ($order as $row) { ?>
                <td><?= $row ?></td>
            <?php } ?>
            <td class="btn-group">
                <form action="" method="post">
                    <button class="rounded-lg btn-success" type="submit" name="action" value="1">Confirmed</button>
                    <button class="rounded-lg btn-danger" type="submit" name="action" value="0">Disproved</button>

                    <input type="hidden" name="order-id" value="<?= $order[0] ?>">
                </form>
            </td>
        </tr>
    <?php } ?>
</table>

<h3>Verified Orders</h3>
<table>
    <?php
    $orders = admin_Model::show_order(3);
    foreach ($orders as $order) { ?>
        <tr>
            <?php foreach ($order as $row) { ?>
                <td><?= $row ?></td>
            <?php } ?>
            <td class="btn-group">
                <form action="" method="post">
                    <button class="rounded-lg btn-success" type="submit" name="action" value="2">Dispatch</button>
                    <button class="rounded-lg btn-danger" type="submit" name="action" value="0">Disproved</button>

                    <input type="hidden" name="order-id" value="<?= $order[0] ?>">
                </form>
            </td>
        </tr>
    <?php } ?>
</table>

<h3>On-the-way Orders</h3>
<table>
    <?php
    $orders = admin_Model::show_order(4);
    foreach ($orders as $order) { ?>
        <tr>
            <?php foreach ($order as $row) { ?>
                <td><?= $row ?></td>
            <?php } ?>
            <td class="btn-group">
                <form action="" method="post">
                    <button class="rounded-lg btn-danger" type="submit" name="action" value="0">Disproved</button>

                    <input type="hidden" name="order-id" value="<?= $order[0] ?>">
                </form>
            </td>
        </tr>
    <?php } ?>
</table>

<h3>In-progress Orders</h3>
<table>
    <?php
    $orders = admin_Model::show_order(5);
    foreach ($orders as $order) { ?>
        <tr>
            <?php foreach ($order as $row) { ?>
                <td><?= $row ?></td>
            <?php } ?>
            <td class="btn-group">
                <form action="" method="post">
                    <button class="rounded-lg btn-success" type="submit" name="action" value="4">Received</button>
                    <button class="rounded-lg btn-danger" type="submit" name="action" value="0">Disproved</button>
                    <input type="hidden" name="order-id" value="<?= $order[0] ?>">
                </form>
            </td>
        </tr>
    <?php } ?>
</table>

<h3>Finished Orders</h3>
<table>
    <?php
    $orders = admin_Model::show_order(6);
    foreach ($orders as $order) { ?>
        <tr>
            <?php foreach ($order as $row) { ?>
                <td><?= $row ?></td>
            <?php } ?>
            <td class="btn-group">
                <form action="" method="post">
                    <button class="rounded-lg btn-success" type="submit" name="action" value="5">Payed</button>
                    <button class="rounded-lg btn-danger" type="submit" name="action" value="0">Disproved</button>

                    <input type="hidden" name="order-id" value="<?= $order[0] ?>">
                </form>
            </td>
        </tr>
    <?php } ?>
</table>
<h2>History</h2>

<table>
    <?php
    $orders = DB::SelectWithLimit('order_history', 100);
    foreach ($orders as $order) { ?>
        <tr>
            <?php foreach ($order as $row) { ?>
                <td><?= $row ?></td>
            <?php } ?>
        </tr>
    <?php } ?>
</table>
<h2>Statistic</h2>
<table>
    <tr>
        <th>Earn this month</th>
        <td>
            <?php
            $query = "
                SELECT SUM(ser.price)
                FROM order_history AS ord
                INNER JOIN `service type` AS ser ON ser.id = ord.service_type_id
                WHERE result > 0 AND month(end) = month(now());
            ";
            $row = mysqli_query(DB::connect(), $query);
            echo '$'.mysqli_fetch_all($row)[0][0];
            ?>
        </td>
    </tr>
    <tr>
        <th>new order</th>
        <td>
        <td>
            <?php
            $query = "
                SELECT COUNT(*) FROM `customer_order`;
            ";
            $row = mysqli_query(DB::connect(), $query);
            echo mysqli_fetch_all($row)[0][0];
            ?>
        </td>
    </tr>
    <?php
    $query = "
                SELECT
                DATE_FORMAT(start, '%a') as weekday,
                COUNT(*)
                FROM `order_history`
                GROUP BY weekday;
                ";

    $row = mysqli_query(DB::connect(), $query);
    $orderPerWeekday = mysqli_fetch_all($row);
    foreach ($orderPerWeekday as $day) {
        ?>
        <tr>
            <th> Orders on <?= $day[0] ?></th>
            <td><?= $day[1] ?></td>
        </tr>
    <?php } ?>
    <tr>
        <th>New customer</th>
        <td>
            <?php
            $query = "
                SELECT count(*) FROM `customer` WHERE `customer`.time > Last_day(adddate(now(), interval -1 month));
            ";
            $row = mysqli_query(DB::connect(), $query);
            echo mysqli_fetch_all($row)[0][0];
            ?>
        </td>
    </tr>
    <tr>
        <th>Total money</th>
        <td>
            <?php
            $query = "SELECT SUM(ser.price) FROM `order_history` AS ORD INNER JOIN `service type` AS ser ON ser.id = ORD.service_type_id WHERE ord.result > 0;";
            $row = mysqli_query(DB::connect(), $query);
            echo mysqli_fetch_all($row)[0][0];
            ?>
        </td>
    </tr>
    <tr>
        <th>Month and money</th>
        <td>
            <?php
            $query = "
                SELECT MONTH(ORD.`end`) as MONTH, SUM(ser.price) as Money
                 FROM `order_history` AS ORD INNER JOIN `service type` AS ser ON ser.id = ORD.service_type_id
                 WHERE ORD.result > 0 GROUP BY MONTH ORDER BY MONTH;";
            $row = mysqli_query(DB::connect(), $query);
            $arr = mysqli_fetch_all($row);
            $data = array();
            $data1 = array();
            foreach ($arr as $item) {
                $month_name = date("M", mktime(0, 0, 0, $item[0], 10));
                $data[] = "'".$month_name."'";
            }
            foreach ($arr as $item) {
                $data1[] = $item[1];
            }
            $month = implode(",",$data);
            $money = implode(",",$data1);

            echo strtoupper($month);

            ?>
        </td>
    </tr>

</table>