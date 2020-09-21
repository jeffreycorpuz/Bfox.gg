<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendEmailController;

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
    return view('home');
});

Route::get('/matches', function () {
    return view('matches');
});

Route::get('/tournament/1', function () {
    return view('matchlist.battle_of_the_champions_tournament');
});

Route::get('/tournament/2', function () {
    return view('matchlist.budfox_tournament_2');
});

Route::get('/contact', [SendEmailController::class,'index']);

Route::post('/send-mail', [SendEmailController::class,'send']);
