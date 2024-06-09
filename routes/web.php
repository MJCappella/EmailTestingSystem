<?php

use Illuminate\Support\Facades\Route;
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
Route::get('/send-email', [MailController::class, 'showForm'])->name('send.email.form');
Route::post('/send-email', [MailController::class, 'sendEmail'])->name('send.email');
Route::get('/', function () {
    return view('welcome');
});
