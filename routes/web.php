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



Route::get('the best one', function () {
    return view('welcome');
});


Route::get('better/{id}', function ($id) {
    return $id;
})->name('a');
// to make thing that you want to pass it

Route::get('testing', function () {

    return 'welcome to Turkiye';
});

Route::get('/to show your statrting / (id?)', function () {
    // (id?) ti means its opation to pass or not as you need
    return 'welcome to Turkiye';
});

/*
    Route : : get('/ show-number/ (id)') .function ($sid){
        return $id;
    }

    Route : : get('/ show-number/ (id)') .function ($sid){
        return $id;
    }

    Route : : get('/ show-number/ (id)') .function ($sid){
        return $id;
    }

*/


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
