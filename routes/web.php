<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\googleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\admincarcontroller;
use App\Http\Controllers\mainhomecontroller;
use App\Http\Controllers\emailmarketingController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/account-dashboard', [mainhomecontroller::class,'dashboard'])->name('user.dashboard');
    Route::get('/profile', [mainhomecontroller::class,'singleuser_dashboard'])->name('profile');
    Route::Post('/profile/{id}', [mainhomecontroller::class,'singleuser_dashboard_update'])->name('profile_update');
    Route::get('/account-favorite', [mainhomecontroller::class,'account_favorite'])->name('account-favorite');
    Route::get('/route',[mainhomecontroller::class,'route'])->name('route');
});

Route::middleware(['auth','auth.admin'])->group(function () {
    Route::get('/Admin-panel',[AdminController::class,'blog_show'])->name('admin.blogdashboard');
    Route::get('/Add-blog',[AdminController::class,'add_blog_show'])->name('add_blog_admin');
    Route::Post('/Add',[AdminController::class,'blog_add'])->name('admin.addblog');
    Route::get('deleted/{id}',[AdminController::class,'blog_delete'])->name('admin.delete');
    Route::get('update/{id}',[AdminController::class,'blog_update'])->name('admin.update');
    Route::POST('update',[AdminController::class,'blog_update_post'])->name('blog.update');
    //car dashboard

    Route::get('/car-admin-panel',[admincarcontroller::class,'all_car_show'])->name('admin.cardashboard');
    Route::get('/Add-car',[admincarcontroller::class,'addcar_show'])->name('admin.select');
    Route::Post('/Addcar',[admincarcontroller::class,'add_car'])->name('admin.addcar');
    Route::get('delete-car/{id}',[admincarcontroller::class,'car_delete'])->name('admin.cardelete');
    Route::get('carupdate/{id}',[admincarcontroller::class,'car_update'])->name('admincar.update');
    Route::POST('/car-update',[admincarcontroller::class,'car_update_post'])->name('car_update_post');

});


Route::get('/', [mainhomecontroller::class,'car_show_home'])->name('home');
Route::fallback(function () {
    return view('404');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/car', [mainhomecontroller::class,'car_show'])->name('car');
Route::get('/car/{id}', [mainhomecontroller::class,'single_car_show'])->name('singlecar');
Route::get('/blog', [mainhomecontroller::class,'blog_show'])->name('blog');
Route::get('/blog/{slug}', [mainhomecontroller::class,'blog_single'])->name('blog-single');



Route::get('/checkout', [mainhomecontroller::class,'checkout'])->name('checkout');

Route::get('/booking', function () {
    return view('booking');
})->name('booking');
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');



// login with google
Route::get('auth/google',[googleController::class,'loginWithGoogle'])->name('loginwithgoogle');

Route::any('/auth/google/callback',[googleController::class,'callbackFromGoogle'])->name('callback');


//contact us page

Route::get('contact-us',[ContactController::class,'index'])->name('contactus');
Route::post('contact-us',[ContactController::class,'store'])->name('contact.us.store');

// email marketing
// Route::get('emailmarketing/allemail',[emailmarketingController::class,'allemail']);
Route::controller(emailmarketingController::class)->group(function () {
    Route::get('/emailmarketing',  'dashboard')->name('dashboard');

    Route::get('/allemailaddress',  'allemailaddress')->name('allemailaddress');
    Route::get('/deleteallemailaddress',  'deleteallemailaddress')->name('deleteallemailaddress');


    Route::get('/alltemplate',  'alltemplate')->name('alltemplate');
    Route::get('/templatedelete/{id}',  'templatedelete')->name('templatedelete');

    Route::post('/templatestructure',  'templatestructure')->name('templatestructure');
    Route::post('/insertemailsave',  'saveemailaddress')->name('insertemailsave');

    //email sending
    Route::get('email/{id}',  'email')->name('email');
    Route::get('/send/{template}',  'emailsend')->name('emailsend');
});

Route::get('/insertemail', function () {
    return view('insertemail');
})->name('insertemail');
Route::get('/structure', function () {
    return view('structure');
})->name('structure');
//import csv file
// Route::get('/importexportview',[exportController::class,'importexportview')->name('importexportview');
// Route::get('/export',[exportController::class,'export')->name('export');
Route::post('/import', [exportController::class, 'import'])->name('import');
