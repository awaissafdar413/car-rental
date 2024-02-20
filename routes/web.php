<?php

use App\Http\Controllers\homecontroller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [homecontroller::class,'car_show_home'])->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');
// Route::get('/profile', function () {
//     return view('account-profile');
// })->name('profile');

Route::get('/car', [homecontroller::class,'car_show'])->name('car');
// Route::get('/test', [homecontroller::class,'car_show'])->name('car');

Route::get('/booking', function () {
    return view('booking');
})->name('booking');
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Route::get('/account-dashboard', function () {
//     return view('account-dashboard');
// })->name('account-dashboard');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [homecontroller::class,'dashboard'])->name('account-dashboard');

    Route::get('/profile', [homecontroller::class,'singleuser_dashboard'])->name('profile');
    Route::Post('/profile/{id}', [homecontroller::class,'singleuser_dashboard_update'])->name('profile_update');
});
