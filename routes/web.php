<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*//*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', [ProductController::class, 'welcome'])
 ->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/product/{product}',
[ProductController::class, 'show'])->name('product.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/addToCart/{product}','App\Http\Controllers\ProductController@addToCart')
->name('cart.add');

Route::middleware(['auth:sanctum', 'verified'])->get('/cart',
[CartController::class, 'show'])->name('cart.show');

Route::get('/cart/{operation}/{product}','App\Http\Controllers\CartController@operation')
->name('cart.operation');

Route::middleware(['auth:sanctum', 'verified'])->get('/prueba', 'App\Http\Controllers\ProductController@prueba_auth')->name('prueba');

/*
    Os explico como va el tema del login a través de jetstream, simplmente donde haga falta que el usuario este verificado
    ponemos Route::middleware(['auth:sanctum', 'verified'])-> [metodo http]-> ....
    Se ve como ejemplo la ruta de prueba 
    Lo he puesto en la ruta de gestion del carrito
*/