<?php

use App\Http\Controllers\PagesController;

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

Route::middleware('role:user')->name('users.')->group(function(){
    Route::get('/',[PagesController::class,'indexUser'])->name('index');

    // // profile
    // Route::prefix('profile')->name('profiles.')->group(function(){
    //     Route::get('/',[ProfileController::class,'index'])->name('index');
    //     Route::post('/{id}/update',[ProfileController::class,'update'])->name('update');
    //     Route::post('/{id}/update-password',[ProfileController::class,'updatePassword'])->name('update-password');
    //     Route::get('/{id}/delete',[ProfileController::class,'destroy'])->name('destroy');
    // });
    
});