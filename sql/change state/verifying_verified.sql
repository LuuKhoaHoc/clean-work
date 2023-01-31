UPDATE
    customer_order
SET
    `customer_order`.`state` = 3
WHERE
    `customer_order`.`id` = 1;

CREATE VIEW team_1 AS SELECT
    `id`
FROM
    `employees`
WHERE
    `employees`.`is_free` = 1
LIMIT 3;

INSERT INTO `team`(`order_id`, `employee_id`)
SELECT
    1,
    team_1.`id`
FROM
    team_1;

UPDATE
    `employees`
SET
    `employees`.`is_free` = 0
WHERE
    `employees`.`id` IN(
SELECT
    `id`
FROM
    team_1
);

DROP VIEW team_1