<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('questions', ['questions' => Question::all()->sortBy('created_at', SORT_REGULAR, true)]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $this->validate($request, [
            'question' => 'required|min:5|regex:/^.*\?$/'
        ], [
            'question.regex' => 'The question must end with \'?\''
        ]);

        $question = Question::create($validated);

        return redirect("questions/{$question->id}/answers")->with('message', 'The question was successfully posted');
    }
}
