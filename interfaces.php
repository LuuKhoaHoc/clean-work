<?php

namespace clean_work_design;

interface IManager {
    public function receiveOrder();
    public function callCustomer();
    public function dispatchCleaningTeam();
    public function receiveCleaningTeam();
    public function receivePayment();
}

