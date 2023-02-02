
create table `order_state` (
    `id` INT(11) NOT NULL ,
    `name` VARCHAR(50) NOT NULL
);

insert into `order_state` (id, name)
values  (1, 'waiting'),
        (2, 'verifying'),
        (3, 'verified'),
        (4, 'on going'),
        (5, 'in progress'),
        (6, 'completed'),
        (7, 'finished');