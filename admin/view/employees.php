<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <thead>
    <th>ID</th>
    <th>Name</th>
    <th>Phone</th>
    <th>Position</th>
    <th>Action</th>
    </thead>
    <?php
    include 'classes/DB.php';
    $query = "
                SELECT emp.id, emp.name, emp.phone, employee_rank.name
                FROM employees AS emp
                INNER JOIN  employee_rank ON `emp`.rank_id = employee_rank.id;
            ";
    $row = mysqli_query(\Administrator\CleanWork\classes\DB::connect(), $query);
    $data = mysqli_fetch_all($row);
    foreach ($data as $emp) {
        ?>
        <tr>
            <?php
            foreach ($emp as $e) {
                ?>
                <td><?= $e ?></td>
            <?php } ?>
            <td>
                <button type="button" name="promote" value="1" <?= $emp[3] == 'Director' ? 'disabled' : '' ?>>Promote</button>
            </td>
        </tr>
    <?php } ?>
</table>
</body>
</html>