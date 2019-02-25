<?php

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

Route::get('/', ['as' => 'home',
    'uses' => 'IndexController@index']);
Route::get('/getListCompany', ['as' => 'get.list.company',
    'uses' => 'IndexController@getListCompany']);
Route::get('/{mst}-{slug}', ['as' => 'view.company',
    'uses' => 'IndexController@viewCompany']);