<?php

use App\Http\Controllers\QuestionController;
use App\Models\Question;
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


Route::resource('questions', QuestionController::class)->only(['index', 'show', 'create']);

// Route::get('/', function () {
//     return redirect('/questions');
// });

// Route::get('/questions', function () {
//     return view('questions', ['questions' => Question::all()->sortBy('created_at')]);
// });

// Route::get('/questions/{id}', function ($id) {
//     $question = Question::find($id);
//     return view('answers', ['question' => $question, 'answers' => $question->answers()]);
// });
