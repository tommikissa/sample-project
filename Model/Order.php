<?php

namespace Model;

use Model\Order\DataInterface;
use Model\Payment;

class Order
{
    private $dataInterface;
    private $paymentFactory;

    public function __construct(DataInterface $dataInterface, PaymentFactory $paymentFactory)
    {
        $this->dataInterface = $dataInterface;
        $this->paymentFactory = $paymentFactory;
    }

    public function makePayment()
    {
        $this->payment->makePayment();
        return $this;
    }

    public function sendNotificationMail()
    {
        $to = $this->dataInterface->getContact()->getEmail();
        $subject = 'Tilauksenne';
        $message = 'Tilauksenne on käsitelty';

        if (!mail($to, $subject, $message)) {
            throw new \Exception('Mailin lähetys epäonnistui.');
        }
    }
}