<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;
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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [AdminLoginController::class, 'login'])->name('login');
Route::post('/do-login',[AdminLoginController::class,'doLogin'])->name('do.login');


// Route::middleware(['auth:admin'])->group(function () {
//     Route::get('/dashboards', function () {
//         return view('templates.dashboards'); 
//     })->name('dashboards');

// });


// Route::get('/dashboards', function () {
//     return view('templates.dashboards');
// })->middleware('admin_auth')->name('dashboards');




// Route::get('/', function () {
//     return view('templates.index');
// });
Route::get('/dashboards', function () {
    return view('templates.dashboards');
})->name('dashboards');


// Route::get('/', [AdminLoginController::class, 'login'])->name('login');
// Route::post('do-login', [AdminLoginController::class, 'doLogin'])->name('do.login');

// Route::middleware(['auth:admin'])->group(function () {
//     Route::get('/admin/dashboard', function () {
//         return view('templates.dashboards');
//     })->name('dashboards');
// });

// Route::get('dashboards', function () {
//     return view('templates.dashboards');
// })->name('dashboards');
// Auth::routes();

// Route::prefix(‘admin’)->group(function (){
//     Route::get('/index,'HomeController@index')->name('home');
//     }