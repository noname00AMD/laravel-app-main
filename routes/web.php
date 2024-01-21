<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View;
use App\Http\Middleware;
use App\Livewire;

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

Route::middleware([])->get('/', [Controllers\PageController::class, "home"]);
Route::get('/about', [Controllers\PageController::class, "about"]);
Route::get('/contact', [Controllers\PageController::class, "about"]);

Route::get('/category', [Controllers\PageController::class, "category"]);
Route::get('/report', [Controllers\PageController::class, "about"]);
Route::get('/rss', [Controllers\PageController::class, "about"]);
Route::get('/sign-in', [Controllers\PageController::class, "about"]);
Route::get('/sign-up', [Controllers\PageController::class, "about"]);
Route::get('/privacy-policy', [Controllers\PageController::class, "about"]);
Route::get('/brand-and-trademark', [Controllers\PageController::class, "test"]);
Route::get('/terms-and-conditions', [Controllers\PageController::class, "test"]);
Route::get('/tuyen-dung', [Controllers\PageController::class, "test"]);
Route::get('/tag', [Controllers\PageController::class, "test"]);


Route::get('/test', [Controllers\PageController::class, "test"]);
Route::post('/name', [Controllers\PageController::class, "name"]);

Route::get('/counter', Livewire\Counter::class);


// HTMX  ----------------------------------------------------------------



// ----------------------------------------------------------------


    Route::get('/' . config("app.admin_path"), Livewire\AdminDashboard::class);
    Route::get('/' . env("ADMIN_PATH", "admin") . '/article', Livewire\AdminArticle::class);
    Route::get('/' . env("ADMIN_PATH", "admin") . '/article/add',Livewire\AdminAddArticle::class );
    
    Route::get('/' . env("ADMIN_PATH", "admin") . '/question', Livewire\AdminQuestion::class);
    // ----------------------------------------------------------------
    Route::get('/' . env("ADMIN_PATH", "admin") . '/category', Livewire\AdminCategory::class);
    
    Route::get('/' . env("ADMIN_PATH", "admin") . '/category/add', Livewire\AdminAddCategory::class);
    
    // ----------------------------------------------------------------
    Route::get('/' . env("ADMIN_PATH", "admin") . '/order', Livewire\AdminOrder::class);
    Route::get('/' . env("ADMIN_PATH", "admin") . '/comment', Livewire\AdminComment::class);
    Route::get('/' . env("ADMIN_PATH", "admin") . '/user', Livewire\AdminUser::class);
    
    Route::get('/' . env("ADMIN_PATH", "admin") . '/user/add',  Livewire\AdminAddUser::class);
    
    // ----------------------------------------------------------------
    Route::get('/' . env("ADMIN_PATH", "admin") . '/media',Livewire\AdminMedia::class);
    
    Route::get('/' . env("ADMIN_PATH", "admin") . '/media/add', Livewire\AdminAddMedia::class);
    
    // ----------------------------------------------------------------
    Route::get('/' . env("ADMIN_PATH", "admin") . '/tag', Livewire\AdminTag::class);
    
    Route::get('/' . env("ADMIN_PATH", "admin") . '/tag/add', Livewire\AdminAddTag::class);
    
    // ----------------------------------------------------------------
    Route::get('/' . env("ADMIN_PATH", "admin") . '/siteinfo', Livewire\AdminSiteInfo::class);

// ----------------------------------------------------------------
// Route::get('/' . env("ADMIN_PATH", "admin").'/siteinfo', function () {
//     return view('admin_siteinfo');
// });
