<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Subject extends Model
{
    //
    protected $guarded=[];
    protected $table='subjects';

    public function chapters()
    {
        return $this->hasMany(Chapter::class,'subject_id');
    }

    public function classes()
    {
        return $this->belongsTo(Classes::class,'class_id');
    }
}
