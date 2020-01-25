<?php 

namespace App\Repositories;

use App\Models\Stats;
use App\Models\Question;
use App\Models\Subject;
use App\Models\Chapter;

use Auth;
use Illuminate\Support\Facades\DB;

class StatsRepository{

    public $total;

    public function completedQuestions($chapter_id)
    {

        $chapter_id = decrypt($chapter_id);

        $completed = Stats::where(['user_id'=>Auth::id(),'chapter_id'=>$chapter_id,'mark'=>1])->get()->map(function ($questions) {

            return $questions->question_id;

        })->toArray();

        return $completed;
    }

    public function create($questions,$test_id)
    {

        foreach($questions as $q=>$a)
        {
            $user_id=Auth::id();

            $question_id=substr($q,1);

            $question=Question::findOrFail($question_id);

            if($question->correct_ans==$a) $mark = 1; else $mark = 0;

            Stats::create([
                'chapter_id'=>$question->chapter_id,
                'subject_id'=>$question->subject_id,
                'class_id'=>$question->class_id,
                'question_id'=>$question->id,
                'user_id'=>$user_id,
                'test_id'=>$test_id,
                'mark' => $mark
            ]);

        }
    }

    public function all(){
        return Stats::select(DB::raw('sum(mark) as total_mark,stats.*'))
            ->where("user_id",Auth::id())
            ->groupBy('test_id')
            ->get();
    }

    public function strongChapter()
    {
        $stat = Stats::select(DB::raw('sum(mark) as $total_mark,chapter_id'))
                    ->where('user_id',Auth::id())
                    ->groupBy('chapter_id')
                    ->with('chapter')
                    ->get()->max();

        return $stat->chapter->name;
    }

    public  function strongSubject()
    {
        $stat = Stats::select(DB::raw('sum(mark) as $total_mark,subject_id'))
            ->where('user_id',Auth::id())
            ->groupBy('subject_id')
            ->with('subject')
            ->get()->max();

        return $stat->subject->name;
    }

//    public function worstChapter()
//    {
//
//        $chapter = DB::table('stats')
//            ->selectRaw('sum(mark) as $total_mark,chapter_id')
//            ->where('user_id',1)
//            ->groupBy('chapter_id')
//            ->get()->min();
//
//        return Chapter::find($chapter->id)->name;
//    }
//
//
//    public function worstSubject()
//    {
//        $subject = Stats::select(DB::raw('sum(mark) as $total_mark,'))
//            ->where('user_id',1)
//            ->groupBy('subject_id')
//            ->get()->min();
//
//        return Subject::find($subject->subhectid)->name;
//    }

    public function mostMarks()
    {
        return Stats::select(DB::raw('sum(mark) as total'))->groupBy('test_id')->get()->max('total');
    }

    public function worstMarks()
    {
        return Stats::select(DB::raw('sum(mark) as total'))->groupBy('test_id')->get()->min('total');
    }

    public function get($mocktest_id)
    {
        $this->total=Stats::where('test_id',$mocktest_id)->sum('mark');
        return Stats::where('test_id',$mocktest_id)->get();
    }




}