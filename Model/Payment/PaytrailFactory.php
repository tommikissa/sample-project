<?php

class PaytrailFactory implements PaymentFactory{

    public function createPayment()
    {
        return new Paytrail();
    }
}