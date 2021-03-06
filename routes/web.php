<?php

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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


Route::get('/users', 'App\Http\Controllers\UserController@index');
Route::post('/addUser', 'App\Http\Controllers\UserController@store')->name('addUser');
Route::get('/users/display', 'App\Http\Controllers\UserController@display');

// Route::get('/email', function(){
//     $data = [
//         'title' => 'Welcome!',
//         'body' => 'Works!!!'
//     ];
//     Mail::to('sessiyeva@gmail.com')->send(new \App\Mail\TestMail($data));
//     echo "Works";
// });


