<?php

use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\UserController;
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
})->name('welcome');

# LOGIN
Route::get('/login', [AuthenticatedSessionController::class,'showForm'])
    ->name('login');
Route::post('/login', [AuthenticatedSessionController::class,'login']);


# LOGOUT
Route::get('/logout', [AuthenticatedSessionController::class,'logout'])
    ->name('logout')->middleware('auth');

# REGISTER
Route::get('/register', [RegisterUserController::class,'showForm'])
    ->name('register');
Route::post('/register', [RegisterUserController::class,'store']);

# User Home
Route::get('/homeUser', function (){
    return view('user.home');})->name('home');

Route::get('/profil', [UserController::class, 'showProfil'])->name('profil');

Route::get('/parametres', [UserController::class, 'showParametres'])->name('parametres');

Route::get('/editInfos', [UserController::class, 'showFormEditInfos'])->name('editFormInfos');
Route::post('/editInfos:{id}', [UserController::class, 'editInfos'])->name('editInfos');

Route::get('/editMdp', [UserController::class, 'showFormEditMdp'])->name('editFormMdp');
Route::post('/editMdp:{id}', [UserController::class, 'editMdp'])->name('editMdp');

Route::get('/contacts', [MessageController::class, 'showContacts'])->name('contacts');

Route::get('/messages:{id}', [MessageController::class, 'getChat'])->name('messages');

Route::post('/envoi:{id}', [MessageController::class, 'envoi'])->name('envoi');
