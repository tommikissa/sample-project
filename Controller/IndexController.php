<?php
namespace Controller;
class IndexController extends AbstractController{

    public function indexAction(){
        $this->setLayout('View/index_index.html');
        $this->renderHtml();
    }
}