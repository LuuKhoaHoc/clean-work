UPDATE `order_history`
SET `order_history`.`result` = 1
WHERE `order_history`.`id` = 1;

DELETE FROM customer_order
WHERE `customer_order`.`id` = 1;