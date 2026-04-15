<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Middleware\HandleCors;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__ . '/../routes/api.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {

        // 🔥 WAJIB: aktifkan CORS handler
        $middleware->append(HandleCors::class);

        // punyamu tetap
        $middleware->redirectGuestsTo(function () {
            return response()->json([
                'message' => 'Unauthenticated'
            ], 401);
        });
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })
    ->create();
