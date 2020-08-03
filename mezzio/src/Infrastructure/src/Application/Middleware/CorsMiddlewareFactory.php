<?php

declare(strict_types=1);

namespace Infrastructure\Application\Middleware;

use Psr\Container\ContainerInterface;
use Tuupola\Middleware\CorsMiddleware;

class CorsMiddlewareFactory
{
    public function __invoke(ContainerInterface $container): CorsMiddleware
    {
        return new CorsMiddleware($container->get("config")["cors"]);
    }
}