<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
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
//Route::get('/about', function(){
//   return view('about');
//});
//Route::view("about",'about');

Route::get('/test', [TestController::class, 'index']);
Route::post('creat', [TestController::class, 'store'])->name("creat");
Route::get("all-data", [TestController::class, 'showdata']);
Route::get("delete/{a}", [TestController::class, 'delete']);
