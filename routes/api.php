<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\curdController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get("/test", function () {
    return ["name" => "vaishnavi", "age" => "21"];
});

Route::get("/crud", [curdController::class, "list"]);
