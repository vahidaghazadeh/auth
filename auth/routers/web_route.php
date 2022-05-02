<?php
namespace app\route;

use app\core\base\App;
use app\core\Controllers\AppController;
use magenfa\auth\AuthController;

$app = new App(dirname(__DIR__));

$app->router->get('/login', [AuthController::class, 'login']);
$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/logout', [AuthController::class, 'logout']);
$app->router->post('/register', [AuthController::class, 'register']);

