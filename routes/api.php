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

Route::get('poll/{poll}')->name('poll.view')->uses('PollController@view');
Route::post('poll')->name('poll.store')->uses('PollController@store');
Route::get('poll/{poll}/results')->name('poll.results')->uses('PollController@results');

Route::post('option/{option}/vote')->name('vote.store')->uses('VoteController');
