<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MailController;

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
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('checklogin');
Route::get('/reactaxiosget', function () {
    return view('reactaxiosget');
});
Route::get('/reactaxiospost', function () {
    return view('reactaxiospost');
});
Route::get('/reactaxiossearch', function () {
    return view('reactaxiossearch');
});
Route::get('/reactaxiosupdate', function () {
    return view('reactaxiosupdate');
});
Route::get('/reactaxiosdelete', function () {
    return view('reactaxiosdelete');
});
Route::get('/sendMail', function () {
    return view('mail');
});

Route::get('/home', [PagesController::class, 'home']);
Route::get('/logout', [LogoutController::class, 'logoutUser']);
Route::post('/register', [RegisterController::class, 'getregister']);
Route::post('/login', [loginController::class, 'checklogin']);
Route::get('/profile', [ProfileController::class, 'profileView'])->middleware('checklogin');
Route::post('/profileUpdate', [ProfileController::class, 'profileUpdate']);
Route::get('/deleteProfile', [ProfileController::class, 'deleteProfile']);
Route::post('sendemail/send', [MailController::class, 'send']);
