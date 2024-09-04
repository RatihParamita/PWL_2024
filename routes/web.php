<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

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

//BASIC ROUTING
Route::get('/', function () {
    return view('welcome');
});
/*Route::get('/hello', function(){
    return 'Hello World';
});*/
Route::get('/world', function(){
    return 'World';
});
/*Route::get('/', function () {
    return ('Selamat Datang');
});
Route::get('/about', function () {
    return ('2241760063<br>Ratih Paramita');
});*/

//ROUTE PARAMETERS
Route::get('/user/{name}', function($name){
    return 'Nama saya '.$name;
});
Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId){
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});
/*Route::get('/articles/{id}', function($id){
    return 'Halaman Artikel dengan ID '.$id;
});*/

//OPTIONAL PARAMETERS
Route::get('/user/{name?}', function($name='John'){
    return 'Nama saya '.$name;
});

//MEMBUAT CONTROLLER
Route::get('/hello', [WelcomeController::class,'hello']);
/*Route::get('/index', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'articles']);*/
Route::get('/index', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticleController::class, 'articles']);

//RESOURCE CONTROLLER
use App\Http\Controllers\PhotoController;
//Route::resource('photos', PhotoController::class);
//Route::resource('photos', PhotoController::class)->only(['index', 'show']);
Route::resource('photos', PhotoController::class)->except(['create', 'store', 'update', 'destroy']);

//MEMBUAT VIEW
/*Route::get('/greeting', function () {
    return view('hello', ['name' => 'Tita']);
    });*/

//VIEW DALAM DIREKTORI
/*Route::get('/greeting', function () {
    return view('blog.hello', ['name' => 'Tita']);
    });*/

//MENAMPILKAN VIEW DARI CONTROLLER
Route::get('/greeting', [WelcomeController::class, 'greeting']);

//SOAL PRAKTIKUM
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransaksiController;
Route::get('/beranda', [BerandaController::class, 'homepage']);
Route::prefix('kategori')->group(function () {
    Route::get('/food-beverage', [ProdukController::class, 'foodBeverage']);
    Route::get('/beauty-health', [ProdukController::class, 'beautyHealth']);
    Route::get('/home-care', [ProdukController::class, 'homeCare']);
    Route::get('/baby-kid', [ProdukController::class, 'babyKid']);
    });
Route::get('/user/{id}/name/{name}', [UserController::class, 'user']);
Route::get('/transaksi', [TransaksiController::class, 'transaction']);