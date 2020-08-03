<?php

declare(strict_types=1);

namespace App\Handler;

use Http\StatusHttp;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Response\ApiResponse;

class HomePageHandler implements RequestHandlerInterface
{
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        return new ApiResponse(
            [   "api_name" => "Kronos",
                "description" => "Kronos Application Programming Interface",
                "developer" => "Developed by Cadu Elias <http://github.com/caduelias>"
            ],
            StatusHttp::OK
        );
    }
}
