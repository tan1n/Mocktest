<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    //
    protected $table='classes';
    protected $guarded=[];

    public function subjects()
    {
        return $this->hasMany(Subject::class,'class_id');
    }
}
