<?php

use App\Http\Controllers\HomeConroller;
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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(HomeConroller::class)->group(function() {
    Route::get('About-Us','aboutUsPage')->name('Home.AboutUs');
    Route::get('Contact-Us','contactUsPage')->name('Home.ContactUs');
    Route::post('store/contact-message','storeContactMessages');
});
