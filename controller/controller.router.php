<?php

class Router {

    private $request;

    /**
     * Get the requested page
     *
     */
    public function __construct(){
        $page = '404';
        if(isset($_SERVER["QUERY_STRING"])) {
            $uri = explode("/", $_SERVER["QUERY_STRING"]);
            $page = isset($uri[BASE_ROUTE]) && !empty($uri[BASE_ROUTE]) ? $uri[BASE_ROUTE] : 'home';
        }
        $this->request = $page;
    }

    /**
     * Render the requested page
     * 
     */

    public function init()
    {
        require_once 'include/include.import.php';
        switch(strtolower($this->request)) {
            case "home":
                $pageTitle = "Home Page";
                require_once "page/home.php";        
                break;
            case "about":
                $pageTitle = "about Page";
                require_once "page/about.php";        
                break;
            default:
                require_once "page/404.php";        
        }
    }

}