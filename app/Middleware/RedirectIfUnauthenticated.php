<?php

namespace App\Middleware;

class RedirectIfUnauthenticated 
{
    public function __invoke($request, $response, $next)
    {
        if (!isset($_SESSION['user_id'])) {
            $response = $response->withRedirect('/public/login');
        }
        //$response->getBody()->write('abc');

        return $next($request, $response);
    }
}