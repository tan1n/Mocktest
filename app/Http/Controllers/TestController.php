<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Chapter;
use App\Models\Subject;

class TestController extends Controller
{
    public function clean()
    {
        $qusetions=Question::where('class_id',0)->get();
        foreach ($qusetions as $q){
            $chapter=Chapter::find($q->chapter_id);
            $q->subject_id=$chapter->sub_id;
            $subject=Subject::find($chapter->sub_id);
            $q->class_id=$subject->class_id;
            $q->save();
        }

        dd('done');
    }
}
