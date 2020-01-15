<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stats extends Model
{
    //
    protected $table='stats';

    protected $guarded=[];


    public function question()
    {
        return $this->belongsTo(Question::class,'question_id');
    }

    public function chapter()
    {
        return $this->belongsTo(Chapter::class,'chapter_id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class,'subject_id');
    }






}
