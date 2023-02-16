<?php

namespace App\Solid;


class StripePaymentMethod implements PaymentMethodInterface
{

    public function makePayment()
    {

        return 'Stripe Payment';

    }

}