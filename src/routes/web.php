<?php

$routes = \Terehov\Scms\Models\Route::get();

foreach ($routes as $route) {
    Route::{$route->method}($route->route, [$route->controller, $route->handler]);
}

Route::get('/cms', function () {
   return response()->json(['status' => 'Success', 'Message' => 'Root page for editing cms package']);
});

Route::get('/cms/pages', [\Terehov\Scms\Controllers\PageController::class, 'list']);

Route::get('/cms/pages/{id}', [\Terehov\Scms\Controllers\PageController::class, 'show']);
