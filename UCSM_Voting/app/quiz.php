<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quiz extends Model
{
    protected $fillable = ['id','question','item1','item2','item3','item4' , 'answer'];
}
