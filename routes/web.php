<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//############# Drives route ##############

//display all data
Route::get('drives','DriveController@index')->name('drives.index');

//Go to create page
Route::get('drive/create','DriveController@create')->name('drives.create');

//Store in database
Route::post('drive/create','DriveController@store')->name('drives.store');

//display one item
Route::get('drive/show/{id}','DriveController@show')->name('drives.show');

//Edit page
Route::get('drive/edit/{id}','DriveController@edit')->name('drives.edit');

//Update to database
Route::post('drive/edit/{id}','DriveController@update')->name('drives.update');

//delete one item
Route::get('drive/destroy/{id}','DriveController@destroy')->name('drives.destroy');

//download file

Route::get('drive/download/{id}','DriveController@download')->name('drives.download');
//############# End drives route ##############
