<?php

use App\Http\Controllers\AdminPanel\AdminPlaceController;
use App\Http\Controllers\AdminPanel\ImageController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
//use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
//use App\Http\Controllers\AdminPanel\categoryController as AdminCategoryController;
use App\Http\Controllers\AdminPanel\HomeController;
use App\Http\Controllers\AdminPanel\categoryController;

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
//Route::get('/', function () {
//    return view('index');
//});
//
//
//// call view in route
//
//Route::get('the best one', function () {
//    return view('welcome');
//});
//
//
//Route::get('better/{id}', function ($id) {
//    return $id;
//})->name('a');
//// to make thing that you want to pass it
//
//Route::get('testing', function () {
//
//    return 'welcome to Turkiye';
//});
//// 2 call view in Route
//Route::get('/to show your statrting / (id?)', function () {
//    // (id?) ti means its option to pass or not as you need
//    return 'welcome to Turkiye';
//});
//
//// 3 call controller function
//Route::get('/home', [HomeController::class, 'index'])->name('home');
//// and you can reduce it and write import in above
//
//// 4 Route -> controller -> view
//Route::get('/test', [HomeController::class, 'test '])->name('test');
//
////5 Route with parameters
//Route::get('/parameters/{id}/{number}', [HomeController::class, 'parameters '])->name('parameters');
//
////6 Route with parameters
//Route::post('/save', [HomeController::class, 'save '])->name('save');
//
//
////Auth::routes();
//
//Route::get('/home', [HomeController::class, 'index'])->name('home');
//
//Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

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

// ****************     ADMIN PANEL ROUTES
// for calling admin panel Routes

Route::prefix('admin')->name( 'admin.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');

// ADMIN PANEL CATEGORY ROUTES
    Route::prefix('/category')->name('category.')->controller(CategoryController::class)->group(function()
    {
        Route::get('/', 'index')->name('index'); // admin_category
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');// it should be post
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/destroy/{id}','destroy')->name('destroy');
    });


// ADMIN PANEL place ROUTES
    Route::prefix('/place')->name('place.')->controller(AdminPlaceController::class)->group(function()
    {
        Route::get('/', 'index')->name('index'); // admin_category
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');// it should be post
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/destroy/{id}','destroy')->name('destroy');

    });

    // ADMIN PANEL Image Gallery ROUTES
    Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(callback: function()
    {
        Route::get('/{Pid}', 'index')->name('index'); // admin_category
        Route::get('/create/{Pid}', 'create')->name('create');
        Route::post('/store/{Pid}', 'store')->name('store');// it should be post
        Route::post('/update/{Pid}/{id}','update')->name('update');
        Route::get('/destroy/{Pid}/{id}','destroy')->name('destroy');
    });

});
