<?php

use App\Http\Controllers\Dash\AuthController;
use App\Http\Controllers\Dash\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\UserController;
use GuzzleHttp\Middleware;
use App\Http\Controllers\Coach\DashboardController;
use App\Http\Controllers\Web\ProfileController;
use Illuminate\Auth\Middleware\Authenticate;
use App\Http\Controllers\Web\CoachController;
use App\Http\Controllers\Web\SubscribtionController;
Use Illuminate\Support\Facades\Auth;








Route::get('/home', [HomeController::class, 'index'])->Middleware('auth');

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->middleware(Authenticate::class)->name('homePage');
});


Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'formlogin')->name('showlogin');
    Route::post('/login', 'login')->name('login');
    Route::post('/logout', 'logout')->name('logout');
});



Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
Route::middleware(['auth'])->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
});

Route::resource('users', UserController::class);


/*
Route::middleware(['auth'])->group(function () {
    Route::resource('coach', CoachController::class)->except(['show']);
});*/

/*  
Route::resource('coach', CoachController::class)->middleware(['auth']);
*/


Route::resource('coach', CoachController::class)->middleware(['auth']);


Route::middleware(['auth'])->group(function () {
    Route::get('/subscribtions', [SubscribtionController::class, 'index'])->name('subscribtions.index');
    Route::resource('subscribtions', SubscribtionController::class);

});





// Route::get('/redirect-by-role', function () {
//     $user = Auth::user();

//     if (!$user) {
//         return redirect('/login');
//     }

//     if ($user->role === 'admin') {
//         return redirect('/admin/main');
//     } elseif ($user->role === 'coach') {
//         return redirect('/coach/dashboard');
//     } elseif ($user->role === 'member') {
//         return redirect('/member/home');
//     }

//     return abort(403);
// });