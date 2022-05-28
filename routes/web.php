<?php
use App\Http\Controllers\AdminPanel\AdminPlaceController;
use App\Http\Controllers\AdminPanel\AdminUserController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\AdminPanel\MessagesController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
//use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
//use App\Http\Controllers\AdminPanel\categoryController as AdminCategoryController;
use App\Http\Controllers\AdminPanel\HomeController;
use App\Http\Controllers\AdminPanel\categoryController;
//use \App\Http\Controllers\AdminPanel\HomeControlle;
use \App\Http\Controllers\Controller\index;
//use \App\Http\Controllers\HomeController;
//use \App\Http\Controllers\AdminPanel; // for faq
use App\Setting;
use App\Http\Controllers\AdminPanel\User;
use App\Http\Controllers\AdminPanel\CommentContoller;
// I just added this

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

// the one which it getting us to home of controller of front-end
Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name('index');


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
Route::get('/to show your starting / (id?)', function () {
    // (id?) ti means its option to pass or not as you need
    return 'welcome to Turkiye';
});

// 3 call controller function
//its getting it to the home of admin panel
//Route::get('/home', [HomeController::class, 'index'])->name('home');
// and you can reduce it and write import in above

// 4 Route -> controller -> view
Route::get('/test', [HomeController::class, 'test '])->name('test');

//5 Route with parameters
Route::get('/parameters/{id}/{number}', [HomeController::class, 'parameters '])->name('parameters');

//6 Route with parameters
Route::post('/save', [HomeController::class, 'save '])->name('save');

// for place of the front-end page

//Route::get('/here/{id}',[\App\Http\Controllers\TestController::class,'here'])->name('here');
Route::get('/place/{id}',[\App\Http\Controllers\HomeController::class,'place'])->name('place');
//Auth::routes();



//Route::get('/home', [HomeController::class,'index'])->name('home');

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


// ****************     Home page ROUTES
Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::get('/about', [\App\Http\Controllers\HomeController::class,'about'])->name('about');
Route::get('/contact', [\App\Http\Controllers\HomeController::class,'contact'])->name('contact');
Route::get('/categoryplace/{id}/{slug}', [\App\Http\Controllers\HomeController::class,'categoryplace'])->name('categoryplace');
Route::get('/reference', [\App\Http\Controllers\HomeController::class,'reference'])->name('reference');
Route::post('/storeMessage', [\App\Http\Controllers\HomeController::class,'storeMessage'])->name('storeMessage');
Route::get('/faq', [\App\Http\Controllers\HomeController::class,'faq'])->name('faq');
Route::post('/storeComment', [\App\Http\Controllers\HomeController::class,'storeComment'])->name('storeComment');
route::view('/loginUser','home.login')->name('loginUser');
route::view('/registerUser','home.register')->name('registerUser');
route::get('/logoutUser',[\App\Http\Controllers\HomeController::class,'logout'])->name('logout');
route::view('/adminlogin','admin.login')->name('admin.login');
route::post('/adminlogincheck',[\App\Http\Controllers\HomeController::class,'adminlogincheck'])->name('adminlogincheck');




// ****************     ADMIN PANEL ROUTES
// for calling admin panel Routes

Route::middleware('admin')->prefix('admin')->name( 'admin.')->group(callback: function () {
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


    // ADMIN PANEL settings ROUTES
    // HomeController has two definition for home and admin panel
    {
        Route::get('setting', [HomeController::class, 'setting'])->name('setting');
        Route::post('setting', [HomeController::class, 'settingUpdate'])->name('setting.update');
    }

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
    Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function()
    {
        Route::get('/{Pid}', 'index')->name('index'); // admin_category

        Route::post('/store/{Pid}', 'store')->name('store');// it should be post
        Route::post('/update/{Pid}/{id}','update')->name('update');
        Route::get('/destroy/{Pid}/{id}','destroy')->name('destroy');
    });


    // ************************ ADMIN PANEL faq ROUTES
    Route::prefix('/faq')->name('faq.')->controller(\App\Http\Controllers\AdminPanel\FaqController::class)->group(function()
    {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');// it should be post
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/destroy/{id}','destroy')->name('destroy');

    });

    // ************************ ADMIN PANEL comment ROUTES
    Route::prefix('/comment')->name('comment.')->controller(\App\Http\Controllers\AdminPanel\commentController::class)->group(function()
    {
        Route::get('/', 'index')->name('index');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');// it should be post
        Route::get('/destroy/{id}','destroy')->name('destroy');

    });


    // ************************ ADMIN PANEL comment ROUTES
    Route::prefix('/message')->name('message.')->controller(MessagesController::class)->group(function()
    {
        Route::get('/', 'index')->name('index');
        Route::get('/show', 'show')->name('show');
        Route::post('/update', 'update')->name('update');// it should be post
        Route::get('/destroy/{id}','destroy')->name('destroy');

    });

    // ************************ ADMIN PANEL user ROUTES
    Route::prefix('/user')->name('user.')->controller(AdminUserController::class)->group(function()
    {
        Route::get('/', 'index')->name('index');

        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');// it should be post
        Route::get('/edit/{id}','edit')->name('edit');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::post('/addrole/{id}', 'addrole')->name('addrole');// it should be post
        Route::get('/destroyrole/{uid}/{rid}','destroyrole')->name('destroyrole');

    });

});
