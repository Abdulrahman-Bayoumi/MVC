<?php
namespace itrax\core;
class app {
    private $controller;
    private $method ;
    private $params ;
    
    public function __construct(){
        $this->url();
        $this->rander();
    }
    private function url(){
        if(!empty($_SERVER['QUERY_STRING'])){
            $url =explode("/",$_SERVER['QUERY_STRING']);;
            $this->controller =isset($url[0])?$url[0]:"home";
            $this->method = isset($url[1])?$url[1]:"index";
            unset($url[0] , $url[1]);
            $this->params =array_values($url);
        }
    }
    private function rander(){
        $controller = "itrax\\controllers\\".$this->controller.'Control';
        if (class_exists($controller))
        {
            $controller = new $controller;
        }
        if (method_exists($controller,$this->method))
            {
    call_user_func_array([$controller,$this->method],$this->params);
              }
    }
}







?>