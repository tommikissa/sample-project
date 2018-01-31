<?php

namespace Model\Order;
use Model\Contact;
use Model\Product;

interface DataInterface{

    public function loadData();
    public function saveData();
    public function addProuct(Product $product);
    public function setContact(Contact $contact);
    public function getProducts();
    public function getContact();

}