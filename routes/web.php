<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\produtosController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\produtosApController;
use App\Http\Controllers\loginController;

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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});




Route::get('/', [homeController::class, 'mostrarHome']) -> name ('home');
Route::get('/cadastro', [produtosController::class, 'mostrarCadastro']) -> name ('cadastro');
Route::post('/cadastro', [produtosController::class, 'Cadastrar']) -> name ('bdcadastro');
Route::get('/desejos', [WishlistController::class, 'mostrarWishlist']) -> name('desejos');
Route::get('add/to-wishlist/{produtos_id}', [WishlistController::class, 'addToWishlist']);




Route::get('search',[homeController::class,'searchProducts']);
 

Route::get('add/to-produtosAp/{produto_id}', [produtosApController::class, 'addToProdutosAp']);
Route::get('/Aprovar-produtos', [produtosApController::class, 'mostrarAprovar']) -> name('aprovar') -> middleware('isAdmin');

Route::get('/produtos', [produtosApController::class, 'mostrarProdutos']) -> name('mostrarProdutos');
Route::get('/gerenciar', [produtosApController::class, 'mostrarGrenciar']) -> name('mostrarGerenciar');

Route::delete('/produtos/{id}', [produtosApController::class, 'destroy']);
Route::delete('/users/{id}', [produtosApController::class, 'destroyUser']);

Route::delete('/produto/{id}', [WishlistController::class, 'destroyWishlist']);

Route::get('/aprovar-produtos/{id}', [produtosApController::class, 'edit']) -> name('aprproduto');
Route::put('/aprovar-produtos/{id}', [produtosApController::class, 'update']) -> name('aprproduto');

Route::get('logout', '\App\Http\Controllers\loginController@logout');