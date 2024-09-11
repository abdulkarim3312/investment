<?php

use App\Http\Middleware\AdminMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web:[
            __DIR__.'/../routes/frontend.php',
            __DIR__.'/../routes/backend.php',
        ],
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // $middleware->web(append: [
        //     \RenatoMarinho\LaravelPageSpeed\Middleware\ElideAttributes::class,
        //     \RenatoMarinho\LaravelPageSpeed\Middleware\InsertDNSPrefetch::class,
        //     \RenatoMarinho\LaravelPageSpeed\Middleware\RemoveComments::class,
        //     \RenatoMarinho\LaravelPageSpeed\Middleware\TrimUrls::class,
        //     \RenatoMarinho\LaravelPageSpeed\Middleware\CollapseWhitespace::class,
        //     \RenatoMarinho\LaravelPageSpeed\Middleware\DeferJavascript::class,
        // ]);
        $middleware->alias([
            'admin' => AdminMiddleware::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
