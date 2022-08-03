<?php

class App{

    protected $controller = "home";
    protected $method = "index";
    protected $params = array();


    public function __construct()
    {
        echo "<pre>";
       $URL = $this->getURL();
    }

    private function getURL(){
        $url =isset( $_GET['url']) ? $_GET['url'] : "home";
        return explode("/", filter_var(trim($url, "/"), FILTER_SANITIZE_URL));
    }
}