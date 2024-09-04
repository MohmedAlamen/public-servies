<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', 'ContactController@send')->name('contact.send');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

// Passport

Route::get('/passport', function () {
    return view('pages.passport');
})->name('passport');

Route::get('/newpassport', function () {
    return view('pages.newpassport');
})->name('newpassport');

Route::get('/renewpassport', function () {
    return view('pages.renewpassport');
})->name('renewpassport');

Route::get('/infopassport', function () {
    return view('pages.infopassport');
})->name('infopassport');

// id
Route::get('/id', function () {
    return view('id.id');
})->name('id');

Route::get('/newid', function () {
    return view('id.newid');
})->name('newid');

Route::get('/lostid', function () {
    return view('id.lostid');
})->name('lostid');

//license


Route::get('/newlicense', function () {
    return view('license.newlicense');
})->name('newlicense');


// Database

use App\Http\Controllers\NewPassportController;

Route::get('/newpassport/store', [NewPassportController::class, 'store'])->name('newpassport.store');

use App\Http\Controllers\NationalIdController;

Route::get('/newid/store', [NationalIdController::class, 'store'])->name('newid.store');
