<?php

use \Model\Order\DataInterface;

class JsonData implements DataInterface{

    private $data;

    public function addProuct(\Model\Product $product)
    {
        $this->data['products'][] = $product;
    }

    public function getProducts(){
        return $this->data['products'];
    }

    public function getContact()
    {
        return $this->data['contact'];
    }

    public function setContact(\Model\Contact $contact)
    {
        $this->data['contact'] = $contact;
    }


    public function loadData()
    {
        $this->data = json_decode(file_get_contents('data.json'));
    }

    public function saveData()
    {
        file_put_contents(json_encode($this->data), 'data.json');
    }

}