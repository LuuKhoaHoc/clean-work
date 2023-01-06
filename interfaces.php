<?php

namespace clean_work_design;

interface IMagement {
    public function receiveOrder();
    public function callCustomer();
    public function dispatchCleaningTeam();
    public function receiveCleaningTeam();
    public function receivePayment();
}

