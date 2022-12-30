<?php

namespace CleanWork;

class Team
{
    private array $member;
    private Order $order;

    /**
     * @return array
     */
    public function getMember(): array
    {
        return $this->member;
    }

    /**
     * @param array $member
     */
    public function setMember(array $member): void
    {
        $this->member = $member;
    }

    /**
     * @return Order
     */
    public function getOrder(): Order
    {
        return $this->order;
    }

    /**
     * @param Order $order
     */
    public function setOrder(Order $order): void
    {
        $this->order = $order;
    }
}