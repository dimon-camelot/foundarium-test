<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ForceJsonResponse
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, \Closure $next): Response|JsonResponse
    {
        // set Accept request header to application/json
        $request->headers->set('Accept', 'application/json');

        return $next($request);
    }
}
