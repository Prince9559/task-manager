<?php

use Illuminate\Http\Request;
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

// A basic example route that returns a JSON response
Route::get('/hello', function () {
    return response()->json(['message' => 'Hello World!']);
});

// An example of a default user route if you run `php artisan install:api`
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// You can find more routing information in the official [Laravel documentation](https://laravel.com/docs/13.x/routing)