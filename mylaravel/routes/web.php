<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\MultiplicationController;

Route::get(
    '/mycontroller/{id?}',
    [MyController::class, 'myfunction']
);

Route::post(
    '/mycontroller/{id?}',
    [MyController::class, 'myfunction']
);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{id?}', function ($val = "") {
    return "<h1>Hello World $val</h1>";
});

Route::get('/multiplication',
    [MultiplicationController::class, 'multiplication']
);
Route::post('/multiplication',
    [MultiplicationController::class, 'multiplication']
);
