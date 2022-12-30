<?php

namespace CleanWork;

enum OrderState
{
    case WAITING;
    case VERIFYING;
    case VERIFIED;
    case ON_GOING;
    case IN_PROGRESS;
    case COMPLETED;
    case FINISHED;

}

enum ServiceType
{
    case KITCHEN_CLEANING;
    case CAR_WASHING;
    case OFFICE_CLEANING;
    case FACTORY_CLEANING;

}

class Order
{
    private ServiceType $serviceType;
    private string $customerAddress;
    private Customer $customer;
    private string $comment;
    private OrderState $state;

    /**
     * @return ServiceType
     */
    public function getServiceType(): ServiceType
    {
        return $this->serviceType;
    }

    /**
     * @param ServiceType $serviceType
     */
    public function setServiceType(ServiceType $serviceType): void
    {
        $this->serviceType = $serviceType;
    }

    /**
     * @return string
     */
    public function getCustomerAddress(): string
    {
        return $this->customerAddress;
    }

    /**
     * @param string $customerAddress
     */
    public function setCustomerAddress(string $customerAddress): void
    {
        $this->customerAddress = $customerAddress;
    }

    /**
     * @return Customer
     */
    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    /**
     * @param Customer $customer
     */
    public function setCustomer(Customer $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     */
    public function setComment(string $comment): void
    {
        $this->comment = $comment;
    }

    /**
     * @return OrderState
     */
    public function getState(): OrderState
    {
        return $this->state;
    }

    /**
     * @param OrderState $state
     */
    public function setState(OrderState $state): void
    {
        $this->state = $state;
    }


}