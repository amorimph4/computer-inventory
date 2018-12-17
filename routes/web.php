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

Route::get('/', 'ComputerInventoryController@index')->name('index');
Route::get('/get-computer/{computerInventory}', 'ComputerInventoryController@show')->name('get_computer');
Route::get('/export/{type}', 'ComputerInventoryController@exportFile')->name('export');
Route::post('/import', 'ComputerInventoryController@importFile')->name('import');
Route::post('/update-computer/{computerInventory}', 'ComputerInventoryController@update')->name('up_computer');
Route::post('/delete-computer/{computerInventory}', 'ComputerInventoryController@destroy')->name('del_computer');