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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("/hottag", function (Request  $request) {

    return array(
        array(
            "id" => 1,
            "tag" => "hot girl",
            "slug" => "hot-girl"
        ),

        array(
            "id" => 2,
            "tag" => "hot girl2",
            "slug" => "hot-girl2"
        ),

        array(
            "id" => 3,
            "tag" => "hot girl3",
            "slug" => "hot-girl3"
        )
    );
});
