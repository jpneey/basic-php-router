<?php
 
/**
 * Require the router Class
 * And render current view based on the URL request
 */

require 'config.php';
require 'controller/controller.router.php';

$router = new Router();
$router->init();

