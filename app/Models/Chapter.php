<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Auth;

class Chapter extends Model
{
    //
    protected $table='chapters';

    protected $guarded=[];

    public function totalQuestion()
    {
        return $this->hasMany(Question::class,'chapter_id');
    }

    public function completedQuestion()
    {   
        return $this->hasMany(Stats::class,'chapter_id')->where(['user_id'=>Auth::id(),'mark'=>'1']);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class,'subject_id');
    }





}
