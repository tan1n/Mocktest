<?php 

namespace App\QuestionTypes;

use App\Interfaces\QuestionInterface;
use App\Models\Question;

use Crypt;

class ChapterQuestions implements QuestionInterface{

    public function __construct($id) {
        $this->id = Crypt::decrypt($id);
    }

    public function getQuestions()
    {
        return Question::where(['chapter_id'=>$this->id])->get();
    }

}