<?php

namespace Model;

use Model\Order\DataInterface;
use Model\Payment;

class Order
{
    private $dataInterface;
    private $payment;

    public function __construct(DataInterface $dataInterface, PaymentFactory $paymentFactory)
    {
        $this->dataInterface = $dataInterface;
    }

    public function setPayment(\PaymentFactory $paymentFactory)
    {
        $this->payment = $paymentFactory->createPayment();
        return $this;
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