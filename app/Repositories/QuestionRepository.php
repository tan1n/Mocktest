<?php 

namespace App\Repositories;


use App\Models\Question;

class QuestionRepository{

    /** Check completed question from this chapter/subject for this user and only get question_id from Stats table and 
    *return Questions from this chapter,except completed questions and  generate 40 questions randomly **/  
    
    private $type;


    public function type($type)
    {
        $this->type=$type;
    }

    public function generateExcept($completed)
    {
        return $this->type->getQuestions()->except($completed)->count() >= 40 ? $this->type->getQuestions()->except($completed)->random(40) : $this->type->getQuestions()->except($completed)->shuffle() ;
    }




}

?>