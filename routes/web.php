<?php

use App\Http\Controllers\AnnouncementController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//define resourceful route for announcement feature
//Route::resource('announcements', 'AnnouncementController');


//Route::get('/announcements', 'AnnouncementController@index')->name('index');
//Route::get('/announcements/create', 'AnnouncementController@create')->name('announcements.create');
//Route::post('/announcements', 'AnnouncementController@store')->name('announcements.store');
// Add additional routes for editing and deleting announcements as needed


