<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Question;
use App\Models\Answer;

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


// questions
Route::get('/questions', function () {
    // TODO: get all questios summary
    return Question::all();
});

Route::post('/questions', function () {
    // TODO: insert in DB
    Question::create([
        'question' => 'test'
    ]);
});


// WARNING: all powerful purge
Route::delete('/questions', function () {
    Question::whereNotNull('id')->delete();
});


// answers
Route::get('/questions/{questionId}/answers', function ($questionId) {
    return Question::find($questionId)->answers();
});

Route::post('/questions/{questionId}/answers', function ($questionId) {
});
