<?php

Class Route
{
    public function __construct($controller, $action)
    {
        $class = "Controller\\" . $controller . 'Controller';
        $function = $action . "Action";

        $controller = new $class;
        $controller->{$function}();
    }
}