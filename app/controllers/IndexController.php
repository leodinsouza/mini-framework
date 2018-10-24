<?php

namespace App\controllers;
use Framework\controller\BaseController;

class IndexController extends BaseController{
    
    public function index()
    {   
        $this->view->teste = ['teste1', 'teste2'];
        $this->render("index");
    }

    public function contact()
    {
        $this->render("contact");
    }

    public function opa()
    {
        echo "opa";
    }
}