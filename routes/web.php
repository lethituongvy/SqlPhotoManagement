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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/photos',"PhotoController@index");

Route::get('/admin/categories/index',"CategoriesController@index");

// edit categories
Route::get('/admin/categories/{id}/edit',"CategoriesController@edit");
Route::patch('/admin/categories/{id}',"CategoriesController@update");

//delete categories
Route::delete('/admin/categories/index/{id}',"CategoriesController@delete");

