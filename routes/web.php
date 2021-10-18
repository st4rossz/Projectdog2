<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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



Auth::routes();
Route::get('home',[PageController::class, 'index']);
Route::get('wait',[PageController::class, 'wait'])->name('notadmin');

Route::middleware(['is_admin'])->group(function(){
    Route::get('admin',[PageController::class, 'admin'])->name('admin');
});

