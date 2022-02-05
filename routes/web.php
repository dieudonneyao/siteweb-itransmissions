<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\Sous_CategorieController;
use App\Models\Sous_Categorie;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('', [IndexController::class, 'home'])->name('accueil');
Route::get('/Qui-sommes-nous', [IndexController::class, 'about'])->name('about');
Route::get('/services', [IndexController::class, 'services'])->name('services');
Route::get('/nos-contact', [IndexController::class, 'contact'])->name('contact');
Route::get('/galerie', [IndexController::class, 'galerie'])->name('galerie');
Route::get('/nos-produits', [IndexController::class, 'produits'])->name('produits');


Route::get('/product-itransmission/{slug}', [IndexController::class, 'prod_per_cat'])->name('itransmission');
Route::resource('/produits' ,ProduitController::class);


Route::get('/admin', [IndexController::class, 'jeff'])->name('jeff');
Route::get('/admin/sous_categorie', [IndexController::class, 'sc'])->name('sc');


Route::get('/product', [IndexController::class, 'produits'])->name('product');
Route::post('/send-contact', [IndexController::class, 'send_contact'])->name('send_contact');


Route::resource('/categorie' ,CategorieController::class);
Route::resource('/scategorie' ,Sous_CategorieController::class);


Route::get('/ajax-subcat/{cat_id}', [AjaxController::class, 's_cat'])->name('ajax-subcat');


Route::group(['middleware' => 'auth'], function() {

	Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
	Route::group(['middleware' => 'verified'], function() {
		Route::get('/accueil', [indexController::class, 'index'])->name('jeff');
        //Route::get('my-properties', [indexController::class, 'properties'])->name('home');
	});

});
