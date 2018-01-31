<?php

spl_autoload_register();

if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];
} else {
    $controller = 'Index';
    $action     = 'index';
}

new Route($controller, $action);

