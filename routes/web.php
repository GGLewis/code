<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use Illuminate\Auth\Middleware\Authenticate;


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
    return view('index');
});

Route::get('/register', function () {
    return view('register');
})->name('register');


Route::get('/login', function () {
    return view('login');
})->name('login');


Route::get('/programme', function () {
    return view('programme');
})->name('programme');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/sign-up', [RegisterController::Class,'sign_up'])->name('sign-up');
Route::post('/sign-in', [RegisterController::Class,'login'])->name('sign-in');






 
Route::middleware([Authenticate::class])->group(function () {
    Route::get('/home', function (){
        return view('home');
    })->name('home');
 

});

