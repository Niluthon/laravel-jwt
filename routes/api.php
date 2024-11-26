<?php

use App\Http\Controllers\AuthController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

$v1GroupConfig = [
    'prefix' => 'v1',
    'middleware' => ['api'],
];

Route::group(
    $v1GroupConfig,

    function (Router $router) {
        $router->post('/users/login', [AuthController::class, 'login']);

        Route::group(['middleware' => ['auth:api']], function () use ($router) {
            $router->get('/users/profile', [AuthController::class, 'profile']);
            $router->post('/users/logout', [AuthController::class, 'logout']);
        });


    }
);

//Route::get('/swagger', function () {
//    return view('swagger/index');
//});
