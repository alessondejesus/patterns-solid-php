<?php

use App\Patterns\Strategy\Factories\CostumerFactory;
use App\Patterns\Strategy\StrategyContext;

beforeEach(function () {
    $this->costumer = new CostumerFactory();
    $this->costumer->setFirstName('Ale')
        ->setLastName('4bidden')
        ->setAddress('Foo Barr 999');
});

describe('patterns - strategy', function () {
    test('credit card implemented', function () {
        $payment = (new StrategyContext('cc'))
            ->getPaymentMethod();

        $costumer = $this->costumer;

        $data = [
            'number' => '9999 9999 9999 999',
            'month' => '99',
            'year' => '9999',
            'cvv' => '999',
        ];

        $result = $payment->setPaymentData($data)
            ->setCostumer($costumer)
            ->handle();

        expect($result)
            ->toBeString('credit_card_payment_method');
    });

    test('boleto implemented', function () {
        $payment = (new StrategyContext('boleto'))
            ->getPaymentMethod();

        $costumer = $this->costumer;

        $data = [
            'cpf' => '99999999999',
        ];

        $result = $payment->setPaymentData($data)
            ->setCostumer($costumer)
            ->handle();

        expect($result)
            ->toBeString('boleto_payment_method');
    });

    test('pix not implemented', function () {
        (new StrategyContext('pix'))
            ->getPaymentMethod();
    })->throws(Exception::class, 'unknown_payment_method', 501);
});
