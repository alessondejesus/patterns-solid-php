<?php

namespace App\Patterns\Strategy;

use App\Exceptions\UnknownPaymentMethodException;
use App\Patterns\Strategy\PaymentMethods\CreditCardPaymentMethod;
use App\Patterns\Strategy\Interfaces\IPaymentMethod;
use App\Patterns\Strategy\PaymentMethods\BoletoPaymentMethod;

class StrategyContext
{
    /**
     * @param string $paymentType
     */
    public function __construct(private readonly string $paymentType)
    {
    }

    /**
     * @return IPaymentMethod
     * @throws UnknownPaymentMethodException
     */
    public function getPaymentMethod(): IPaymentMethod
    {
        return match ($this->paymentType) {
            'cc' => new CreditCardPaymentMethod(),
            'boleto' => new BoletoPaymentMethod(),
            default => throw new UnknownPaymentMethodException('unknown_payment_method'),
        };
    }
}
