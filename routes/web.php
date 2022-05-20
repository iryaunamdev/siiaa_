<?php

use App\Http\Livewire\Comisiones\Comisiones;
use App\Http\Livewire\Comisiones\Wrapper;
use App\Http\Livewire\CRUDComisiones;
use App\Http\Livewire\SHOWComisiones;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Modulo Comisiones
Route::group(['prefix' => 'comisiones'], function(){
    Route::get('/', Wrapper::class)->name('comisiones');
});

//Route::get('comisiones/{id?}', CRUDComisiones::class)->middleware('auth')->name('comisiones');
//Route::get('comisiones/{id}', SHOWcomisiones::class)->middleware('auth')->name('comisiones-show');
