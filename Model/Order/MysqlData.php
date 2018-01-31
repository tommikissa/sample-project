<?php


use \Model\Order\DataInterface;

class MysqlData extends MysqlDataModel implements DataInterface{


    protected function getConnection(){
        // TODO: Implement getConnection() method.
    }

    public function loadData()
    {
        $this->getConnection()->{ /* jotain */  };
    }

    public function saveData()
    {
        // TODO: Implement saveData() method.
    }

    public function addProuct(\Model\Product $product)
    {
        // TODO: Implement addProuct() method.
    }

    public function setContact(\Model\Contact $contact)
    {
        // TODO: Implement setContact() method.
    }

    public function getProducts()
    {
        // TODO: Implement getProducts() method.
    }

    public function getContact()
    {
        // TODO: Implement getContact() method.
    }


}