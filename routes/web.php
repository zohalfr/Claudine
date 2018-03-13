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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function(){
  // var_dump(class_exists('PDO'));

  // Or
  // var_dump(defined(PDO::MYSQL_ATTR_LOCAL_INFILE)); // mysql

  // Or
  // var_dump(extension_loaded ('PDO' )); // returns boolean
  //
  // // Or
  var_dump(extension_loaded('pdo_mysql'));
  //
  // // Or get all extensions and search for a specific one


});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/bagages', 'BagageController@index');
Route::get('/index', 'ClientController@index');
Route::get('/clients/create', 'ClientController@create');
Route::post('/update', 'ClientController@update');
Route::get('/edit/{id}', 'ClientController@edit');
Route::get('/show/{id}', 'ClientController@show');
Route::get('/delete/{id}', 'ClientController@delete');
Route::post('/clients/store', 'ClientController@store');
