<?php

namespace clean_work_design;

use CleanWork\Team;

abstract class ManagerAbstractClass implements IManager
{
    protected abstract function chooseEmployees(int $empNeeded) : Team;
    /**
     * choose cleaning employees from database -> object Team $team
     *
     * update [EMPLOYEES].[STATUS] on member in $team from 'free' to 'busy' -> void
     * if there's someone already 'busy', add that member to array $busyStaff
     *
     * handle $busyStaff if it's not empty for maximum 3 times -> void
     * if it's failed for more than 3 times, cancel order
     */
    public function dispatchCleaningTeam()
    {
        $this->chooseEmployees();

    }
}