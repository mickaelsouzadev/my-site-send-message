<?php

use Illuminate\Support\Facades\Route;
use App\Controllers;
use App\Mail\SendMessage;
use Illuminate\Support\Facades\Mail;

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

Route::post('/send', 'SendMessageController@send');

Route::get('/', function() {
	echo "Tá perdido parceiro?";
});
