<?php

namespace App\controllers;
use Framework\controller\BaseController;
use Framework\database\Conn;
use App\models\Cliente;


class IndexController extends BaseController{
    
    public function index()
    {   
        $client = new Cliente(Conn::getDb());
        $this->view->client = $client->all();        
        $this->render("index");
    }

    public function contact()
    {
        $this->render("contact");
    }
}