<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

Route::post('/login','UserController@postLogin')->name('login');
Route::get('/login', 'UserController@getLogin');

Route::get('/sign-up', 'UserController@getSignUp')->name('user.signup');
Route::post('/sign-up', 'UserController@postSignUp');
Route::get('users','UserController@getUsers')->name('user.list');
//Route::get('feed', [DashboardController::class, 'getfeed']);
Route::get('feed', 'DashboardController@getfeed')->name('dashboard');
