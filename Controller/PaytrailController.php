<?php
/**
 * Created by PhpStorm.
 * User: tommi
 * Date: 31/01/2018
 * Time: 7.34
 */

namespace Controller;

use Model\Order;

class PaytrailController extends AbstractController
{

    public function indexAction()
    {
        $this->setLayout('View/Paytrail/index.html');
        $this->renderHtml();
    }

    public function successAction(){
        $this->setLayout('View/Paytrail/success.html');
        $this->renderHtml();
    }

    public function failureAction(){
        $this->setLayout('View/Paytrail/failure.html');
        $this->renderHtml();
    }

    public function createAction()
    {
        try {
            //TODO: integration implementation

        } catch (Exception $e) {
            //TODO: implement logging
        }

    }

}