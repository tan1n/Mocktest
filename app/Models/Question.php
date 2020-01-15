<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Auth;

class Question extends Model
{
    protected $table='questions';
    protected $guarded=[];

    public function chapter()
    {
        return $this->belongsTo(Chapter::class,'chapter_id');
    }

    public function subject()
    {
        return $this->chapter->subject();
    }

    public function classes()
    {
        return $this->subject->classes();
    }


}
