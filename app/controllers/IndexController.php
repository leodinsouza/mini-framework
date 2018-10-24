<?php

namespace App\controllers;
use Framework\controller\BaseController;
use Framework\DI\Container;

class IndexController extends BaseController{
    
    public function index()
    {   
        $client = Container::getModel("Cliente");
        $this->view->client = $client->all();        
        $this->render("index");
    }

    public function contact()
    {   
        $client = Container::getModel("Cliente");
        $this->view->client = $client->find(2);
        $this->render("contact");
    }
}