<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\AdminPanel\HomeControlle as AdminHome; //you can use both of them i think
use App\Http\Controllers\HomeController;
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
    return view('index');
});


// call view in route

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
// 2 call view in Route
Route::get('/to show your statrting / (id?)', function () {
    // (id?) ti means its opation to pass or not as you need
    return 'welcome to Turkiye';
});

// 3 call contreoller function
Route::get('/home', [HomeController::class, 'index'])->name('home');
// and you can reduse it and write importe in above

// 4 Route -> controoler -> view
Route::get('/test', [HomeController::class, 'test '])->name('test');

//5 Route with parameters
Route::get('/parameters/{id}/{number}', [HomeController::class, 'parameters '])->name('parameters');

//6 Route with parameters
Route::post('/save', [HomeController::class, 'save '])->name('save');


//Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::post('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// for calling admin panel Routes

Route::get('/admin', [HomeControlle::class, 'index'])->name('admin');

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
