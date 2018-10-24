<?php

namespace App\controllers;
use Framework\controller\BaseController;

class IndexController extends BaseController{
    
    public function index()
    {   
        $this->render("index");
    }

    public function contact()
    {
        $this->render("contact");
    }
}