<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/', 'App\\Http\\Controllers\\PageController@about')->name('home');
Route::get('/contact', 'App\\Http\\Controllers\\PageController@contact')->name('contact');
Route::get('/courses', 'App\\Http\\Controllers\\PageController@courses')->name('courses');
Route::get('/experiences', 'App\\Http\\Controllers\\PageController@experiences')->name('experiences');
Route::get('assets/{path}', 'App\\Http\\Controllers\\AssetController@serve')->where('path', '.+');

Route::get('download-cv', 'App\\Http\\Controllers\\PageController@printPdf')->name('cv.download');


Route::post('/sendEmail', [PageController::class, 'sendEmail'])->name('sendEmail');
