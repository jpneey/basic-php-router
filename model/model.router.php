<?php

class Router {

    /**
     * Render Current View
     * Based on $_SERVER["QUERY_STRING"].
     * Convert $_SERVER["QUERY_STRING"] to Array 
     * of Views and assign base $view based on
     * the first value in the array of views.
     */
    
    public function renderView() {

        $view = 'home';

        if(isset($_SERVER["QUERY_STRING"])) {
            $uri = explode("/", $_SERVER["QUERY_STRING"]);
            $view = isset($uri[0]) && !empty($uri[0]) ? $uri[0] : 'home';
        }

        return $this->getView($view);
    }

    public function getView($pageTitle = '404') {

        require_once 'include/include.import.php';
        
        if(file_exists("./view/".$pageTitle.".php")) {
            require_once './view/'.$pageTitle.'.php';
            return;
        }

        $pageTitle = $pageTitle.' - Not Found'; 
        require_once  'view/404.php';
        return;
    }

}