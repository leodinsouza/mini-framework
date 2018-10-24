<?php

namespace Framework\controller;

abstract class BaseController{
    protected $view;
    private $action;

    public function __construct()
    {   
        $this->view = new \stdClass;
        
    }

    protected function render($action){
        $this->action = $action;
        $current = get_class($this);
        $singleName = strtolower(str_replace("Controller", "", str_replace("App\\controllers\\", "", $current)));
        include_once "../views/{$singleName}/{$this->action}.phtml";
    }

}