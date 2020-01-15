<?php 

namespace App\Repositories;

use App\Models\Subject;

class SubjectRepository {

    private  $subject;

    public function __construct(Subject $subject) {
        $this->subject = $subject;
    }

    public function chapters($id)
    {
        return $this->subject->findOrFail($id)->chapters;
    }




}