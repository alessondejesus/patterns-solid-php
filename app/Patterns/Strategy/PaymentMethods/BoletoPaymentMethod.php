<?php

namespace App\Patterns\Strategy\PaymentMethods;

use App\Patterns\Strategy\Factories\CostumerFactory;
use App\Patterns\Strategy\Interfaces\IPaymentMethod;

class BoletoPaymentMethod implements IPaymentMethod
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

        return 'boleto_payment_method';
    }
}
