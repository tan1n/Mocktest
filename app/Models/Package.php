<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    //
    protected $table='packages';
    protected $guarded=[];


    /* Class info from the package */

    public function classes()
    {
        return $this->belongsTo(Classes::class,'class_id');
    }
}
