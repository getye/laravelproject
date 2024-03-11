<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudInsertController;
use App\Http\Controllers\StaffInsertController;
use App\Http\Controllers\StudViewController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AuthManager;

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

Route::get('/', function () {
    return view('home');
});

Route::view('/home', 'home')->name("home");
Route::get('/redirects', [HomeController::class,"index"]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::view('/register', 'register');
Route::get('/freshman', [StudInsertController::class, 'freshman']);
Route::post('/freshman', [StudInsertController::class, 'fpost'])->name('freshman.post');
Route::view('/registration', 'registration');
Route::view('/requests.registration', 'requests.registration');
Route::view('/mission', 'mission')->name('mission');
Route::get('register_student', [StudInsertController::class, 'studinsertform'])->name('studinsertform');
Route::post('register_student', [StudInsertController::class, 'studinsert'])->name('studinsert');
Route::get('register_staff', [StaffInsertController::class, 'staffinsertform'])->name('staffinsertform');
Route::post('register_staff', [StaffInsertController::class, 'staffinsert'])->name('staffinsert');

//Route::get('view-records','StudViewController@index');
Route::get('stud_view', [StudViewController::class, 'index']);
//Route::get('view-records','StudViewController@index');

Route::get('login', [AuthManager::class, 'login'])->name("login");
Route::post('login', [AuthManager::class, 'loginPost'])->name("login.post");
Route::get('registration', [AuthManager::class, 'registration'])->name("registration");
Route::post('registration', [AuthManager::class, 'registrationPost'])->name("registration.post");

Route::get('logout', [AuthManager::class, 'logout'])->name("logout");


require __DIR__.'/auth.php';
