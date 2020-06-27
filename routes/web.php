<?php

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
*/
//Routes de autenticacion
Auth::routes();
Route::get('logout',function(){
    Auth::logout();
    return redirect('login');
})->name('logout');


//frontend
Route::get('/','HomeController@index')->name('inicio');
Route::get('listsubcategorie{id}','Frond\ListController@getListArticleSubcategorie')->name('listsubcategorie');




//Admin
Route::group(['middleware'=>'auth'],function(){
    Route::get('home','Admin\HomeAdminController@index')->name('home');
    Route::resource('category','Admin\CategoryController');
    Route::resource('subcategory','Admin\SubCategoryController');
    Route::resource('article','Admin\ArticleController');
    Route::get('colors{id_article}','Admin\ColorController@index')->name('colorindex');
    Route::delete('deletecolor{color_id}{article_id}','Admin\ColorController@destroy')->name('colordestroy');
    Route::resource('color','Admin\ColorController');
//photos
    Route::resource('photo','Admin\PhotoController');
    Route::delete('deletephoto{photo_id}{article_id}','Admin\PhotoController@destroy')->name('photodestroy');

//carrusel
    Route::resource('carrusel','Admin\CarruselController');
});
