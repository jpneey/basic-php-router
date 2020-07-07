<?php
 
/**
 * Require the router Class
 * And render current view based on the URL request
 */

require_once 'model/model.router.php';

$router = new Router();
$router->renderView();