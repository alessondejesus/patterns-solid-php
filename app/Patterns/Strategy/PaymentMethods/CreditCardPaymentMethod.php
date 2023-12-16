<?php

namespace App\Patterns\strategy\PaymentMethods;

use App\Patterns\Strategy\Factories\CostumerFactory;
use App\Patterns\Strategy\Interfaces\IPaymentMethod;

class CreditCardPaymentMethod implements IPaymentMethod
{
    /**
     * @var array
     */
    private readonly array $data;
    /**
     * @var CostumerFactory
     */
    private readonly CostumerFactory $costumerFactory;

    /**
     * @param CostumerFactory $costumerFactory
     * @return IPaymentMethod
     */
    public function setCostumer(CostumerFactory $costumerFactory): IPaymentMethod
    {
        $this->costumerFactory = $costumerFactory;
        return $this;
    }

    /**
     * @param array $data
     * @return IPaymentMethod
     */
    public function setPaymentData(array $data): IPaymentMethod
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return string
     */
    public function handle(): string
    {
        $data = $this->data;
        $costumer = $this->costumerFactory;

        return 'credit_card_payment_method';
    }
}
