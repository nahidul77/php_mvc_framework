<?php 
/**
 * Front Controller
 */
// echo 'requested url : '.$_SERVER['QUERY_STRING'];

/**
 * Routing
 */

 require '../Core/Router.php';

 $router = new Router();

 echo get_class($router);