<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($questionId)
    {
        $question = Question::find($questionId);
        return view(
            'answers',
            ['question' => $question],
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->merge(['question_id' => $request->route('question')]);

        $validated = $request->validate([
            'answer' => 'required|min:5',
            'question_id' => 'required'
        ]);

        Answer::create($validated);

        return Redirect::back()->with('message', 'Answer successfully posted');
    }
}
