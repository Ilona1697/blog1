<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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
/* METHOD GET */ 

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/contact/all', 
    [ContactController::class, 'allData']
)->name('contact_data');

Route::get('/contact/all/{id}', 
    [ContactController::class, 'showOneMessage']
)->name('contact_data_one');

Route::get('/contact/all/{id}/update', 
    [ContactController::class, 'updateMessage']
)->name('contact_update');

Route::get('/contact/all/{id}/delete', 
    [ContactController::class, 'deleteMessage']
)->name('contact_delete');

/* METHOD POST */ 

Route::post('/contact/all/{id}/update', 
[ContactController::class, 'updateMessageSubmit']
)->name('contact_update_submit');

Route::post('/contact/submit', 
    [ContactController::class, 'submit']
)->name('contact_submit');