UPDATE customer_order
SET `customer_order`.`state` = 6
WHERE `customer_order`.`id` = 1;

UPDATE employees
SET `employees`.`is_free` = 1
WHERE employees.id IN (SELECT `team`.`employee_id` FROM team WHERE team.order_id = 1);

INSERT INTO order_history(
    `id`,
    `start`,
    `customer_id`,
    `service_type_id`,
    `address`,
    `comment`,
    `employee_list`,
    `result`
)
SELECT
    ORD.id AS id,
    ORD.time AS START,
    ORD.customer_id,
    ORD.service_type_id,
    ORD.address,
    ORD.comment,
    team.employee_list,
    0
FROM
    customer_order AS ORD
INNER JOIN(
    SELECT
        `team`.`order_id`,
        GROUP_CONCAT(`team`.`employee_id`) AS employee_list
    FROM
        `team`
    GROUP BY
        order_id
) AS team
ON
    ORD.id = team.`order_id`
WHERE
    ORD.id = 1;

DELETE FROM team
WHERE team.order_id = 1;