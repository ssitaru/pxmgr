<?php
namespace PXMgr;

use Cake\Core\Configure;
use Cake\Error\Middleware\ErrorHandlerMiddleware;
use Cake\Http\BaseApplication;
use Cake\Routing\Middleware\AssetMiddleware;
use Cake\Routing\Middleware\RoutingMiddleware;
use Cake\Http\Middleware\CsrfProtectionMiddleware;

class Application extends BaseApplication
{
    public function middleware($middlewareQueue)
    {
        $middlewareQueue
            ->add(ErrorHandlerMiddleware::class)
            ->add(AssetMiddleware::class)
            ->add(new CsrfProtectionMiddleware())
            ->add(new RoutingMiddleware($this));

        return $middlewareQueue;
    }
}
