<?php

namespace App\Patterns\Strategy\Interfaces;

use App\Patterns\Strategy\Factories\CostumerFactory;

interface IPaymentMethod
{
    /**
     * @param array $data
     * @return $this
     */
    public function setPaymentData(array $data): self;

    /**
     * @param CostumerFactory $costumerFactory
     * @return $this
     */
    public function setCostumer(CostumerFactory $costumerFactory): self;

    /**
     * @return string
     */
    public function handle(): string;
}
