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
Route::get('/', function ()
{
    return redirect('/propertiesList/1');
});
Route::get('/propertiesList/{idPage}', 'Controller@propiertiesList');

Route::get('/property/{idProp}','Controller@propertyPage');

Route::post('/contactTest','Controller@postContact');