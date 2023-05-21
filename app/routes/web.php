<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Authenticate;

use App\Models\User;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserActivityController;


use Illuminate\Foundation\Auth\EmailVerificationRequest;
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


Route::any('/home', function(){
    return view('home', []);
})->name('home');



Route::get('/login', [UserController::class, 'loginPageOrRedirect'])->name('login');
Route::post('/authenticate', [UserController::class, 'authenticateUserOrError'])->name('authenticate');

Route::get('/register', function(){  return view('register'); })->name('register');
Route::post('/registerUser', [UserController::class, 'registerUserOrError'])->name('registerUser');

Route::middleware([Authenticate::class])->group(function () {

    Route::get('/logout', [UserController::class, 'logOutUser']);

    Route::get('/test', function(){
        return 'lol';
    });


    Route::any('/home1', function(){
        return view('homePage', []);
    })->name('home1');


    Route::get('/userPanel/addActivity/{date?}', [UserActivityController::class, 'create'] );
    Route::post('/userPanel/addActivity/', [UserActivityController::class, 'store'] );


    Route::get('/userPanel/panel/', [UserActivityController::class, 'index_calendar'] );
    Route::get('/userPanel/panel/getUserActivityJson/{month}', [UserActivityController::class, 'getJsonByMonth']);

    Route::get('/userPanel/panel/{id}/edit', [UserActivityController::class, 'index_calendar'] );


});
