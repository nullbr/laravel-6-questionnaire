<?php

namespace App\Http\Controllers;

use App\Questionnaire;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function show(Questionnaire $questionnaire)
    {
        $questionnaire->load('questions.answers');

        return view('survey.show', compact('questionnaire'));
    }

    public function store()
    {
        $data = \request()->validate([
            'responses.*.answer_id' => 'required',
            'responses.*.question_id' => 'required',
        ]);

        dd(request()->all());
    }
}
