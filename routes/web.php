<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\pharma\CartController;
use App\Http\Controllers\pharma\ProductController;

use App\Http\Controllers\pharma\HomeController;

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

// Route::get('/', function () {
//     return view('master');
// });

// Auth::routes();

Route::get('/', [App\Http\Controllers\pharma\HomeController::class, 'index'])->name('home');

Route::get('/register', [App\Http\Controllers\pharma\HomeController::class, 'register'])->name('register');

Route::get('/login', [App\Http\Controllers\pharma\HomeController::class, 'login'])->name('login');

Route::get('/cart', [App\Http\Controllers\pharma\CartController::class, 'index'])->name('cart');


Route::get('/products', [App\Http\Controllers\pharma\ProductController::class, 'index'])->name('products');
Route::get('/medicine', [App\Http\Controllers\pharma\ProductController::class, 'medicine'])->name('medicines');
Route::get('/health', [App\Http\Controllers\pharma\ProductController::class, 'health'])->name('health');
Route::get('/beauty', [App\Http\Controllers\pharma\ProductController::class, 'beauty'])->name('beauty');
Route::get('/kid', [App\Http\Controllers\pharma\ProductController::class, 'kid'])->name('kid');
Route::get('/sport', [App\Http\Controllers\pharma\ProductController::class, 'sport'])->name('sport');
Route::get('/accessory', [App\Http\Controllers\pharma\ProductController::class, 'accessory'])->name('accessory');
Route::get('/other', [App\Http\Controllers\pharma\ProductController::class, 'other'])->name('other');






Route::get('/promotion', [App\Http\Controllers\pharma\ProductController::class, 'promotion'])->name('promotion');

Route::get('/dashboard', [App\Http\Controllers\pro\DashboardController::class, 'index'])->name('dashboard');

Route::get('/buys', [App\Http\Controllers\pro\DashboardController::class, 'commands'])->name('buys');

Route::get('/contact', [App\Http\Controllers\pharma\ContactController::class, 'contact'])->name('contact');

Route::get('/faq', [App\Http\Controllers\pharma\PageController::class, 'faq'])->name('faq');

Route::get('/terms', [App\Http\Controllers\pharma\PageController::class, 'terms'])->name('terms');

Route::get('/confidentiel', [App\Http\Controllers\pharma\PageController::class, 'confidentiel'])->name('confidentiel');

Route::get('/about-us', [App\Http\Controllers\pharma\PageController::class, 'about'])->name('about-us');



Route::group(['prefix' => 'pro'], function () {
Route::get('/dashboard', [App\Http\Controllers\pro\DashboardController::class, 'index'])->name('pro.dashboard');
Route::get('/buys', [App\Http\Controllers\pro\DashboardController::class, 'commands'])->name('pro.buys');
Route::get('/product-list', [App\Http\Controllers\pro\DashboardController::class, 'produits'])->name('pro.product-list');
Route::get('/user', [App\Http\Controllers\pro\DashboardController::class, 'user'])->name('pro.user');
Route::get('/agent', [App\Http\Controllers\pro\DashboardController::class, 'agent'])->name('pro.agent');



});
