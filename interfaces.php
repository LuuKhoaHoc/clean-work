<?php

namespace clean_work_design;

use CleanWork\Order;

interface IManager {
    public function receiveOrder();
    public function confirmOrder();
    public function dispatchCleaningTeam(int $order_id , int $empNeeded);
    public function receiveCleaningTeam();
//    public function receivePayment(); Can hoi them
}

