<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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

// Route::get('/', function () {
//     return view('guest.index');
// });



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('admin-page', function() {
//     return 'Halaman untuk Admin';
// })->middleware('role:admin')->name('admin.page');

// Route::get('user-page', function() {
//     return 'Halaman untuk User';
// })->middleware('role:user')->name('user.page');


Route::name('guests.')->group(function(){
    Route::get('/',[PagesController::class,'index'])->name('index');
    Route::get('/register',[PagesController::class,'register'])->name('register-user');
    Route::get('/tutorial',[PagesController::class,'tutorial'])->name('tutorial');
    Route::get('/tutorial/{id}',[PagesController::class,'tutorialSelect'])->name('tutorial-select');


    
});