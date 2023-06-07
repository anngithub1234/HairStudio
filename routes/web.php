<?php

use App\Http\Controllers\homecontroller;
use App\Http\Controllers\servicesController;
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
Route::get('/redirect',[homecontroller::class,"index"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [homecontroller::class,"index"]
    )->name('dashboard');
});

Route::get('/redirect',[homecontroller::class,"index"]);

Route::get('adminfunction',[homecontroller::class,"Adduser"]);

Route::post('save-user',[homecontroller::class,"saveuser"]);

Route::post('finishEdit-user',[homecontroller::class,"finishEdituser"]);

Route::get('edit-user/{id}',[homecontroller::class,"edituser"]);

Route::get('delete-user/{id}',[homecontroller::class,"deleteuser"]);

Route::get('addservice',[homecontroller::class,"Addservice"]);

Route::post('service-add',[homecontroller::class,"saveservice"]);

Route::post('servicefin',[homecontroller::class,"servicefin"]);

Route::get('delete-ser/{id}',[homecontroller::class,"deleteser"]);

Route::get('edit-ser/{id}',[homecontroller::class,"editser"]);



