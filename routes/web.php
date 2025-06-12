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
use App\Http\Controllers\Web\SubscriptionController;
Use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Web\ProgramController;
use App\Http\Controllers\Dash\ExerciseController;










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




Route::resource('coach', CoachController::class)->middleware(['auth']);


Route::middleware(['auth'])->group(function () {
    Route::get('/subscriptions', [SubscriptionController::class, 'index'])->name('subscriptions.index');
    Route::resource('subscriptions', SubscriptionController::class);
});



Route::resource('programs', ProgramController::class);



Route::get('/admin/exercises', [ExerciseController::class, 'index'])->name('admin.exercises.index');







