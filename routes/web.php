<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\RedirectResponse;

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
Route::get('/', function (){
    return redirect('/propertiesList/1');
});

Route::get('/propertiesList/{idPage}', 'ListController@loadPage');

Route::get('/property/{idProperty}','PropertyController@loadProperty');
Route::post('/property/sendContactReq','PropertyController@postContactReq');