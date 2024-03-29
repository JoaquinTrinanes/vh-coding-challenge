<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\QuestionController;
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


Route::resource('questions', QuestionController::class)->only(['index', 'show', 'store']);
Route::resource('questions.answers', AnswerController::class)->only(['index', 'store']);
Route::permanentRedirect("/", "questions");
