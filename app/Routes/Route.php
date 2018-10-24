<?php

namespace App\Routes;
use Framework\init\Bootstrap;

class Route extends Bootstrap {
    
    protected function initRoutes()
    {
        $routes['home'] = [
            'route' => '/public/',
            'controller' => 'IndexController',
            'action' => 'index'
        ];

        $routes['contact'] = [
            'route' => '/public/contact',
            'controller' => 'IndexController',
            'action' => 'contact'
        ];

        $routes['opa'] = [
            'route' => '/public/opa',
            'controller' => 'IndexController',
            'action' => 'opa'
        ];

        $this->setRoutes($routes);
    }

    
}