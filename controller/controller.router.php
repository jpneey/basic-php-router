<?php

class Router {

    public function __construct()
    {
        $this->renderPage($this->getPage());
    }

    public function getPage() {

        $page = 'home';

        if(isset($_SERVER["QUERY_STRING"])) {

            $uri = explode("/", $_SERVER["QUERY_STRING"]);
            $page = isset($uri[0]) && !empty($uri[0]) ? $uri[0] : 'home';
        
        }
        
        return $page;

    }

    public function renderPage($page = '404') {

        $pageTitle = $page;
        require_once 'include/include.import.php';
        if(file_exists("./page/".$page.".php")) {
            require_once './page/'.$page.'.php';
        } else {
            $pageTitle = $pageTitle.' - Not Found'; 
            require_once  'page/404.php';
        }

    }

}