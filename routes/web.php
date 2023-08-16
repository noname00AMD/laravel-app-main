<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Controllers\PageController::class, "home"]);
Route::get('/about', [Controllers\PageController::class, "about"]);

// ----------------------------------------------------------------
Route::get('/' . env("ADMIN_PATH", "admin"), [Controllers\AdminController::class, "show_dashboard"]);
Route::get('/' . env("ADMIN_PATH", "admin").'/article', [Controllers\AdminController::class, "show_article"]);
Route::get('/' . env("ADMIN_PATH", "admin").'/article/add', [Controllers\AdminController::class, "add_article"]);
// ----------------------------------------------------------------
Route::get('/' . env("ADMIN_PATH", "admin").'/category', [Controllers\AdminController::class, "show_category"]);

Route::get('/' . env("ADMIN_PATH", "admin").'/category/add', [Controllers\AdminController::class, "add_category"]);

// ----------------------------------------------------------------
Route::get('/' . env("ADMIN_PATH", "admin").'/user', [Controllers\AdminController::class, "show_user"]);

Route::get('/' . env("ADMIN_PATH", "admin").'/user/add', [Controllers\AdminController::class, "add_user"]);

// ----------------------------------------------------------------
Route::get('/' . env("ADMIN_PATH", "admin").'/media', [Controllers\AdminController::class, "show_media"]);

Route::get('/' . env("ADMIN_PATH", "admin").'/media/add', [Controllers\AdminController::class, "add_media"]);

// ----------------------------------------------------------------
Route::get('/' . env("ADMIN_PATH", "admin").'/tag', [Controllers\AdminController::class, "show_tag"]);

Route::get('/' . env("ADMIN_PATH", "admin").'/tag/add', [Controllers\AdminController::class, "add_tag"]);

// ----------------------------------------------------------------
Route::get('/' . env("ADMIN_PATH", "admin").'/siteinfo', [Controllers\AdminController::class, "site_info"]);

// ----------------------------------------------------------------
// Route::get('/' . env("ADMIN_PATH", "admin").'/siteinfo', function () {
//     return view('admin_siteinfo');
// });
