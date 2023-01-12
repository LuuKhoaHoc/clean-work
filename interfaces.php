<?php

namespace clean_work_design;

use CleanWork\Order;

interface IManager {
    public function receiveOrder(): Order;
    public function callCustomer();
    public function dispatchCleaningTeam(int $empNeeded);
    public function receiveCleaningTeam();
    public function receivePayment();
}

