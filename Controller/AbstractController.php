<?php

namespace Controller;

use DOMDocument;

abstract class AbstractController
{
    private $dom;
    private $layout;

    private function getDocument()
    {
        if (!$this->dom) {
            $dom = new DOMDocument();
            $dom->loadHTML(file_get_contents('View/index.html'));
            $this->dom = $dom;
        }

        return $this->dom;
    }

    protected function setLayout($layout)
    {
        $this->layout = $layout;
    }

    protected function loadLayout()
    {
        $dom = new DOMDocument();
        $dom->loadXml(file_get_contents($this->layout));
        return $dom->documentElement;
    }

    protected function renderHtml()
    {
        $layout = $this->getDocument()
            ->importNode($this->loadLayout(), TRUE);

        $this->getDocument()
            ->getElementById('main')
            ->appendChild($layout);

        echo $this->getDocument()->saveHTML();
    }
}