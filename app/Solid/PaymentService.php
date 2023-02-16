<?php

namespace App\Solid;

class PaymentService 
{

    public function pay(PaymentMethodInterface $paymentMethod)
    {

        return $paymentMethod->makePayment();

    }


}