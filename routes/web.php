<?php

use App\Http\Controllers\users2;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\dashbordlivrecontroller;

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



Route::resource('/livres', LivreController::class)->middleware('auth');

Route::post('livres/findByKeyword', [LivreController::class, 'findByKeyword'])->name('livres.findByKeyword');
Route::post('livres/findByCategory', [LivreController::class, 'findByCategory'])->name('livres.findByCategory');

Route::get('/register', [UsersController::class, 'registerForm'])->name('auth.registerForm')->middleware('guest');
Route::post('/register', [UsersController::class, 'register'])->name('auth.register')->middleware('guest');
Route::get('/login', [UsersController::class, 'loginForm'])->name('auth.loginForm')->middleware('guest');
Route::post('/login', [UsersController::class, 'login'])->name('auth.login')->middleware('guest');
Route::get('/logout', [UsersController::class, 'logout'])->name('auth.logout')->middleware('auth');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/books', function () {
    return view('books');
})->name('books');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/cart', [CartController::class, 'showCart'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::delete('/cart/remove/{userId}/{bookId}', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::resource('/dashbordlivre',dashbordlivrecontroller::class);

Route::resource('users2', users2::class);

Route::resource('author', AuthorController::class);
Route::resource('category', CategoryController::class);


Route::post('/payment/checkout', [PaymentController::class, 'checkout'])->name('payment.checkout');
Route::post('/payment/process', [PaymentController::class, 'processPayment'])->name('payment.process');
Route::get('/admin/orders', [AdminOrderController::class, 'index'])->name('admin.orders');
Route::patch('/admin/orders/{order}/update-status', [AdminOrderController::class, 'update'])->name('order.updateStatus');
Route::delete('/admin/orders/{order}/delete', [AdminOrderController::class, 'destroy'])->name('order.delete');
