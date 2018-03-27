<?php
/**
 * Routes configuration
 *
 */

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::defaultRouteClass(DashedRoute::class);

Router::prefix('admin', function($routes) {
	$routes->connect('/', ['controller' => 'Admin', 'action' => 'index']);
    $routes->fallbacks(DashedRoute::class);
});

Router::scope('/', function (RouteBuilder $routes) {
    $routes->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);
    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);
});

Plugin::routes();
