<?php

use App\Http\Controllers\JiriController;

/** @var Core\Router $router */
$router->get('/', [JiriController::class, 'index']);

$router->get('/jiris', [JiriController::class, 'index']);

$router->get('/jiri', [JiriController::class, 'show']);

$router->get('/jiri/create', [JiriController::class, 'create']);
$router->post('/jiri', [JiriController::class, 'store'])->csrf();

$router->get('/jiri/edit', [JiriController::class, 'edit']);
$router->patch('/jiri', [JiriController::class, 'update'])->csrf();

$router->get('/login', [\App\Http\controllers\AuthentictedSessionController::class,'create']);
$router->post('/login', [\App\Http\controllers\AuthentictedSessionController::class,'store']);

$router->get('/register', [\App\Http\controllers\RegisteredSessionController::class,'create']);
$router->post('/register', [\App\Http\controllers\RegisteredSessionController::class,'store']);

$router->delete('/jiri', [JiriController::class, 'destroy'])->csrf();


