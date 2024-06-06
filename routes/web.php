<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StripeController;

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

Route::get('/app', function () {
    return view('app');
})->name('app');
Route::get('/about_us', function () {
    return view('aboutUs');
})->name('aboutUs');
Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/designs',function (){
return view('designs');
})->name('designs');
Route::get('/privacy', function (){
    return view('privacy');
})->name('privacy');
Route::get('/make-payment', [StripeController::class, 'index'])->name('index');
Route::post('/checkout', [StripeController::class, 'checkout']);
Route::get('/success', [StripeController::class, 'success'])->name('success');

