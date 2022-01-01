<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontEndController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

#Route::get('/',function(){

    #return view('welcome');
#});

Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'redirect']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/add_content_view', [AdminController::class, 'addContent']);
Route::get('/show_content', [AdminController::class, 'showContent']);
Route::get('/show_user', [AdminController::class, 'showUsers']);
Route::get('/show_contributor', [AdminController::class, 'showContributor']);
Route::get('/show_message', [AdminController::class, 'showMessage']);
Route::get('/approved/{id}', [AdminController::class, 'approved']);
Route::get('/cancel/{id}', [AdminController::class, 'cancel']);
Route::get('/approved2/{id}', [AdminController::class, 'approved2']);
Route::get('/cancel2/{id}', [AdminController::class, 'cancel2']);
Route::get('/approved3/{id}', [AdminController::class, 'approved3']);
Route::get('/cancel3/{id}', [AdminController::class, 'cancel3']);
Route::get('/deleteContent/{id}', [AdminController::class, 'delete']);
Route::get('/updateContent/{id}', [AdminController::class, 'update']);
Route::post('/editContent/{id}', [AdminController::class, 'edit']);

Route::post('/upload_content', [AdminController::class, 'uploadContent']);

Route::get('/subscribe', [HomeController::class, 'showPayment']);
Route::get('/about', [HomeController::class, 'showAbout']);
Route::get('/contact', [HomeController::class, 'showContact']);
Route::get('/contribute', [HomeController::class, 'showContribute']);
Route::post('/contributors', [HomeController::class, 'contributors']);
Route::post('/bkashUsers', [HomeController::class, 'bkash']);
Route::post('/debitCardUsers', [HomeController::class, 'card']);
Route::post('/message', [HomeController::class, 'message']);
Route::get('/article1', [HomeController::class, 'article1']);
Route::get('/article2', [HomeController::class, 'article2']);
Route::get('/article3', [HomeController::class, 'article3']);


//Route::get('/article1', [FrontEndController::class, 'showPost']);








Route::get('/blog', [HomeController::class, 'showBlog']);
Route::get('/post', [HomeController::class, 'showPost']);