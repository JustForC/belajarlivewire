<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('dashboard.product.product')->with(['title' => 'Product',
                                                    'name' => 'Ghema Allan',
                                                    'role' => 'Super Admin']);
});

Route::get('product', function () {
    return view('dashboard.product.product')->with(['title' => 'Product',
                                                    'name' => 'Ghema Allan',
                                                    'role' => 'Super Admin']);
});

Route::group(['prefix' => 'product', 'controller' => ProductController::class, 'as' => 'product.'], function(){
    Route::get('/', 'index')->name('index');
    Route::get('/read', 'read')->name('read');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::put('/store/{id}', 'update')->name('update');
    Route::delete('/delete/{id}', 'delete')->name('delete');
});
