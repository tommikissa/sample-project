<?php

use \lib\Paytrail_Module_Rest;

class Paytrail
{
    const TEST_MERCHANT_ID = '';
    const TEST_MERCHANT_SECRET = '6pKF4jkv97zmqBJ3ZL8gUw5DfT2NMQ';
    private $module;
    private $testMode = true;

    private $merchantSecret;
    private $merchantId;


    public function getModule()
    {
        if (!$this->module) {
            $id = $this->getMerchantId();
            $secret = $this->getMerchantSecret();
            $this->module = new Paytrail_Module_Rest($id, $secret);
        }
        return $this->module;
    }

    private function getMerchantId()
    {
        if ($this->testMode) {
            return self::TEST_MERCHANT_ID;
        } else {
            return $this->merchantId;
        }
    }

    private function getMerchantSecret()
    {
        if ($this->stestMode) {
            return self::TEST_MERCHANT_SECRET;
        } else {
            return $this->merchantSecret;
        }
    }

    public function createPayment()
    {

    }

    public function confirmPayment()
    {

    }

}