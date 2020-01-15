<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    //

    protected $table="subscriptions";

    protected $guarded=[];

    /* Get package info from package table */

    public function package()
    {
        return $this->belongsTo(Package::class,'package_id');
    }
}
