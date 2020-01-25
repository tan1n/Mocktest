<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Question extends Model
{
    protected $table='questions_test';
    protected $guarded=[];

    public function chapter()
    {
        return $this->belongsTo(Chapter::class,'chapter_id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class,'subject_id');
    }

    public function class()
    {
        return $this->belongsTo(Classes::class,'class_id');
    }


}
