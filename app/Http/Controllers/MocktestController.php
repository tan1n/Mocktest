<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\QuestionRepository;
use App\Repositories\StatsRepository;
use App\QuestionTypes\ChapterQuestions;


class MocktestController extends Controller
{

    public function __construct(QuestionRepository $questions,StatsRepository $stats)
    {
        $this->questions = $questions;

        $this->stats = $stats; 
    }

    //Start a Mocktest 
    public function startMocktest(Request $request)
    {
        $chapterQuestions=new ChapterQuestions($request->id);

        $this->questions->type($chapterQuestions,20);

        $completed = $this->stats->completedQuestions($request->id);

        $questions = $this->questions->generateExcept($completed);

        return view('users.test',['questions'=>$questions,'test_id'=>uniqid()]);
    }

    //End of a Mocktest

    public function endMocktest(Request $request)
    {
        $this->stats->create($request->question,$request->test_id);

        return redirect()->route('stats.show', ['stat' => $request->test_id]);
    }

}
