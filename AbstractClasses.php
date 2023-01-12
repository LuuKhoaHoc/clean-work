<?php

namespace clean_work_design;

use CleanWork\Team;

abstract class ManagerAbstractClass implements IManager
{
    protected abstract function chooseEmployees(int $empNeeded);
    /**
     * choose cleaning employees from database -> object Team $team
     *
     * update [EMPLOYEES].[STATUS] on member in $team from 'free' to 'busy' -> void
     * if there's someone already 'busy', add that member to array $busyStaff
     *
     * handle $busyStaff if it's not empty for maximum 3 times -> void
     * if it's failed for more than 3 times, cancel order
     */
    public function receiveOrder() {

    }
    public function dispatchCleaningTeam(int $empNeeded)
    {
        // Cần biết Order trả ra cái gì để biết số lượng người cần cử đi theo Order đó để
        // xài switch case hoặc if else.
        // Cần biết người nào làm việc nào để xác định dươc state của người đó. Nếu cử theo số lượng thì
        // Cử random rồi đổi state hay như nào?
        $order = $this->receiveOrder();
        if ($order == "") {
        $this->chooseEmployees($order[]);
        } elseif ($order = "") {
            $this->chooseEmployees($order[]);
        } else {
            $this->chooseEmployees($order[]);
        }
    }
}