<?php

namespace CleanWork;

class Payment
{
    public const PRICE_LIST = [
        'ServiceType::KITCHEN_CLEANING' => 640,
        'ServiceType::CAR_WASHING' => 240,
        'ServiceType::OFFICE_CLEANING' => 820,
        'ServiceType::FACTORY_CLEANING' => 6200,
    ];
    private int $totalPrice;
    private string $discount;

    /**
     * @return int
     */
    public function getTotalPrice(): int
    {
        return $this->totalPrice;
    }

    /**
     * @param int $totalPrice
     */
    public function setTotalPrice(int $totalPrice): void
    {
        $this->totalPrice = $totalPrice;
    }

    /**
     * @return string
     */
    public function getDiscount(): string
    {
        return $this->discount;
    }

    /**
     * @param string $discount
     */
    public function setDiscount(string $discount): void
    {
        $this->discount = $discount;
    }

}