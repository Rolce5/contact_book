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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('contact', function () {
//     return view('contact');
// });
Route::get('contact',[ContactController::class,'index']);
Route::post('save-contact',[ContactController::class,'saveContact']);
Route::get('add-contact',[ContactController::class,'addContact']);
Route::get('edit-contact/{id}',[ContactController::class,'editContact']);
Route::post('update-contact',[ContactController::class,'updateContact']);
Route::get('delete-contact/{id}',[ContactController::class,'deleteContact']);