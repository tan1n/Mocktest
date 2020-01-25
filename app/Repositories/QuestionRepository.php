<?php 

namespace App\Repositories;


use App\Models\Question;

class QuestionRepository{

    /** Check completed question from this chapter/subject for this user and only get question_id from Stats table and 
    *return Questions from this chapter,except completed questions and  generate 40 questions randomly **/  
    
    private $type;
    private $total;

    public function type($type,$total)
    {
        $this->type=$type;
        $this->total=$total;
    }

    public function generateExcept($completed)
    {
        $newQuestions=$this->type->getQuestions()->except($completed);

        return $newQuestions->count() >= $this->total ? $newQuestions->random($this->total) : $newQuestions->shuffle() ;
    }




}

?>