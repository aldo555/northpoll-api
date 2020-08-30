<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

header('Access-Control-Allow-Origin: https://northpoll.findaldo.dev');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Type, X-Auth-Token, Origin, Authorization');

Route::get('poll/{poll}')->name('poll.view')->uses('PollController@view');
Route::post('poll')->name('poll.store')->uses('PollController@store');
Route::get('poll/{poll}/results')->name('poll.results')->uses('PollController@results');

Route::post('option/{option}/vote')->name('vote.store')->uses('VoteController');
