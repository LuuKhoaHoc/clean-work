<?php
require 'DB.php';
$orders = DB::show_order();
?>
<h1 align="center">---ADMIN SCREEN---</h1>

<table border="1" >
    <thead>
    <th>id</th>
    <th>time</th>
    <th>name</th>
    <th>email</th>
    <th>phone</th>
    <th>service</th>
    <th>price</th>
    <th>address</th>
    <th>cofirm</th>
    </thead>
    <?php foreach ($orders as $order) {?>
    <tr>
       <?php foreach ($order as $row) { ?>
        <td><?= $row?></td>
        <?php } ?>
        <td><button>Confirmed</button></td>
    </tr>
    <?php } ?>
</table>