<?php

use App\Http\Controllers\Admin\CategorieController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\ProduitController;
use App\Http\Controllers\Admin\Sous_CategorieController;
use App\Http\Controllers\Admin\AjaxController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth']],function(){

    Route::prefix('/dashboard')->name('admin.')->group(function(){

        Route::get('/', [IndexController::class, 'index'])->name('index');
        Route::get('/itransmission_categorie', [CategorieController::class, 'admin_index'])->name('admin_cat');
        Route::post('/add_categorie', [CategorieController::class, 'admin_cat'])->name('add_cat');

        Route::get('/categorie', [CategorieController::class, 'admin_cat']);
        Route::post('categories', [CategorieController::class, 'add_cat']);
        Route::get('fetch-categories', [CategorieController::class, 'fetchcategorie']);
        Route::get('edit-categorie/{id}', [CategorieController::class, 'edit']);
        Route::put('update-categorie/{id}', [CategorieController::class, 'update']);
        Route::delete('delete-categorie/{id}', [CategorieController::class, 'destroy']);

        Route::get('/sous-categorie', [Sous_CategorieController::class, 'index'])->name('scat');
        Route::post('/sous_categories', [Sous_CategorieController::class, 'store'])->name('add_scat');
        Route::get('/fetch-subcategories', [Sous_CategorieController::class, 'fetch_subcategories'])->name('fetchsouscategorie');
        Route::get('/edit_sous_categorie/{id}', [Sous_CategorieController::class, 'edit']);
        Route::put('/update_sous_categorie/{id}', [Sous_CategorieController::class, 'update']);
        Route::delete('/delete_sous_categorie/{id}', [Sous_CategorieController::class, 'destroy']);

        Route::get('/products', [ProduitController::class, 'index'])->name('products');
        Route::get('/products/{id}', [ProduitController::class, 'show'])->name('products_edits');

        Route::post('/products', [ProduitController::class, 'store'])->name('add_products');
        Route::get('/fetch-Products', [ProduitController::class, 'fetch_products'])->name('fetch_products');
        Route::get('/ajouter_produits', [ProduitController::class, 'create_products'])->name('add_products');

        Route::get('/edit_products/{id}', [ProduitController::class, 'edit_products'])->name('edit_product');
        Route::put('/update_products/{id}', [ProduitController::class, 'update_products'])->name('update_product');
        Route::delete('/delete_products/{id}', [ProduitController::class, 'destroy_products'])->name('destroy_products');
        Route::get('/ajax-subcat/{cat_id}', [AjaxController::class, 's_cat'])->name('ajax-subcat');

        Route::any('/deconnexion',[AuthController::class,'out'])->name('auth.logout');

        Route::get('/itransmissions_users',[UserController::class, 'index'])->name('user.index');
        Route::get('/itransmissions_users/create',[UserController::class, 'create'])->name('user.create');
        Route::post('/itransmissions_users',[UserController::class, 'store_user'])->name('user.store');
        Route::get('/itransmissions_users/{id}/edit',[UserController::class, 'edit'])->name('user.edit');
        Route::put('/itransmissions_users/{id}/update',[UserController::class, 'update'])->name('user.update');
        Route::delete('/itransmissions_users/{id}/delete',[UserController::class, 'destroy'])->name('user.delete');


        /* Route::controller(UserController::class)->group(function(){
            Route::get('items', 'index')->name('items.index');
            Route::post('items', 'store')->name('items.store');
            Route::get('items/create', 'create')->name('items.create');
            Route::get('items/{item}', 'show')->name('items.show');
            Route::put('items/{item}', 'update')->name('items.update');
            Route::delete('items/{item}', 'destroy')->name('items.destroy');
            Route::get('items/{item}/edit', 'edit')->name('items.edit');
        }); */

    });

});
