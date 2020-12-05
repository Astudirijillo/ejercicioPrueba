<?php

use Illuminate\Support\Facades\Route;
use App\Models\Instrument;
use App\Models\Guitar;
use App\Http\Resources\InstrumentResource;
use App\Http\Resources\GuitarResource;
use App\Http\Controllers\InstrumentController;
use App\Http\Controllers\GuitarController;

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

Route::get('/instruments', 'InstrumentController@index');
Route::get('/instruments/{instrument}','InstrumentController@show');
Route::post('instruments/','InstrumentController@store');
Route::put('instruments/{instrument}','InstrumentController@update');
Route::delete('instruments/{instrument}','InstrumentController@destroy');

Route::get('/guitars', 'GuitarController@index');
Route::get('/guitars/{guitar}','GuitarController@show');
Route::post('guitars/','GuitarController@store');
Route::put('guitars/{guitar}','GuitarController@update');
Route::delete('guitars/{guitar}','GuitarController@destroy');
