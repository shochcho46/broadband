<?php

use App\Http\Middleware\AdminGuard;
use App\Http\Middleware\TrackUniqueVisitors;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',

        health: '/up',
        then: function () {

            Route::middleware('web')
            // ->prefix('webhooks')
            // ->name('webhooks.')
            ->group(base_path('routes/admin.php'));

        },
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'visitor' => TrackUniqueVisitors::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->render(function (NotFoundHttpException $e, Request $request) {
            if ($request->is('api/*')) {
                return response()->json([
                    'message' => 'Record not found.',
                    'error' => $e->getMessage(),
                ], 404);
            }
        });
    })->create();
