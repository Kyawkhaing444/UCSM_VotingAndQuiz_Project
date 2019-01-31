<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class participant extends Model
{
    protected $fillable = ['id','name','photoURL','cata_id'];
}
