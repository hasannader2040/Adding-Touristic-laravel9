<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\AdminPanel\HomeController;
use App\Http\Controllers\AdminPanel\categoryController;
use App\Http\Controllers\Controller;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');



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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// ****************     ADMIN PANEL ROUTES
Route::get('/admin', [HomeController::class, 'index'])->name('admin');


// ADMIN PANEL CATEGORY ROUTETS

Route::get('/admin/category', [categoryController::class, 'index'])->name('admin_category');

Route::get('/admin/category/create', [categoryController::class, 'create'])->name('admin_create');
Route::post('/admin/category/store', [categoryController::class, 'store'])->name('admin_create_store');
Route::get('/admin/category/edit/{id}', [categoryController::class, 'edit'])->name('admin_create_edit');
Route::post('/admin/category/update/{id}', [categoryController::class, 'update'])->name('admin_create_update');
Route::get('/admin/category/show/{id}', [categoryController::class, 'show'])->name('admin_create_show');
Route::get('/admin/category/destroy/{id}', [categoryController::class, 'destroy'])->name('admin_create_destroy');
//Route::post('/admin/category/show/{id}', [categoryController::class, 'show'])->name('admin_create_show');



// there are some additional things I have to add them
