<?php
 
/**
 * Require the router Class
 * And render current view based on the URL request
 */

require_once 'controller/controller.router.php';

$router = new Router();
$router->requestPage()->renderPage();

/* EOF */
